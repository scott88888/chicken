<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

use GuzzleHttp\Client;
use App\Models\lineModel;
use App\Models\orderModel;
use Session;

class LoginController extends Controller
{
    public function pageLine()
    {
        $url = $this->getLoginBaseUrl();
        return view('index')->with('url', $url);
    }

    public function lineLoginCallBack(Request $request)
    {
        try {
            $error = $request->input('error', false);
            if ($error) {
                throw new Exception($request->all());
            }
            $code = $request->input('code', '');
            $response = $this->getLineToken($code);
            $user_profile = $this->getUserProfile($response['access_token']);

            if ($user_profile) {
                Session::forget('list');
                $awards = $this->lineLottery($user_profile);
                $list =  lineModel::getLotteryHistory($user_profile);

                Session::put('list', $list);
                return view('lineLottery', compact('awards', 'list'));
            }
            $this->pageLine();
        } catch (Exception $ex) {
            Log::error($ex);
        }
    }

    public function getLoginBaseUrl()
    {
        // 組成 Line Login Url
        $url = config('line.authorize_base_url') . '?';
        $url .= 'response_type=code';
        $url .= '&client_id=' . config('line.channel_id');
        $url .= '&redirect_uri=' . config('line.callback_url');
        $url .= '&state=' . sha1(time());;
        $url .= '&scope=profile%20openid';

        return $url;
    }

    public function getLineToken($code)
    {
        $client = new Client();
        $response = $client->request('POST', config('line.get_token_url'), [
            'form_params' => [
                'grant_type' => 'authorization_code',
                'code' => $code,
                'redirect_uri' => config('line.callback_url'),
                'client_id' => config('line.channel_id'),
                'client_secret' => config('line.secret')
            ]
        ]);
        return json_decode($response->getBody()->getContents(), true);
    }

    public function getUserProfile($token)
    {
        $client = new Client();
        $headers = [
            'Authorization' => 'Bearer ' . $token,
            'Accept'        => 'application/json',
        ];
        $response = $client->request('GET', config('line.get_user_profile_url'), [
            'headers' => $headers
        ]);
        return json_decode($response->getBody()->getContents(), true);
    }

    public function checkLineUser($user_profile)
    {
        //檢查lineID是否存在
        $checkID = lineModel::selectID($user_profile['userId']);
        if (!$checkID) {
            $return = lineModel::createLineID($user_profile);
            return view('lineLottery');            
        } else {
            $return = false;
        }
        return $return;
    }

    public function checkLottery($user_profile)
    {
        //檢查lineID是否抽過獎
        $checkLottery = lineModel::selectLottery($user_profile);
        if ($checkLottery) {
            $return = $checkLottery;
        } else {
            $return = false;
        }
        return $return;
    }

    public function lineLottery($user_profile)
    {

        //檢查lineID是否存在並寫入資料庫
        $checkID = $this->checkLineUser($user_profile);       
        if (!$checkID) {
            $this->pageLine();
        }
        $today = date('m/d');
        $time =  date('H:i:s');
        //檢查是否抽過獎
        $checkLottery = $this->checkLottery($user_profile);
        $lotteryStatus = '';
        if ($checkLottery) {
            //陣列轉換
            $checkLottery =  json_decode(json_encode($checkLottery), true);
            foreach ($checkLottery as $key => $value) {
                if (in_array($today, $value)) {
                    $lotteryStatus = "1";
                    // $url = $this->getLoginBaseUrl();
                    // echo "8888";
                    // $this -> gogo();
                    return "already";
                }
            }
            if ($lotteryStatus != "1") {
                $awards = $this->getLottery();
                $this->reduceQuantity($awards);
                lineModel::setLotteryHistory($user_profile, $awards, $today, $time, 0);
                return $awards;
            }
        } else {
            $awards = $this->getLottery();
            $this->reduceQuantity($awards);
            lineModel::setLotteryHistory($user_profile, $awards, $today, $time, 0);
            return $awards;
        }
    }
    //抽獎功能
    public function getLottery()
    {
        //基礎機率陣列
        $probabilityArr = array(
            '0' => 0,
            '1' => 50,
            '2' => 50,
            '3' => 50,
            '4' => 1,
            '5' => 231,
            '6' => 231,
            '7' => 1,
            '8' => 5,
            '9' => 380,
        );

       
        //獎項陣列
        $awardsArr = lineModel::getAllAwards();
        foreach ($awardsArr as $key => $value) {
            $awards[$key] = array(
                'id' => $value->id,
                'awards' => $value->awards,
                'quantity' => $value->quantity,
                'probability' => $probabilityArr[$key]
            );
        }
        //確認獎項剩餘,調整機率
        //將無數量獎項的機率 加到最後一項 
        foreach ($awards as $key => $value) {
            if ($value['quantity'] == 0) {
                $awards[count($awards) - 1]['probability'] += $value['probability'];
                $awards[$key]['probability'] = 0;
            }
        }
        foreach ($awards as $key => $val) {
            $arr[$val['id']] = $val['probability'];
        }
        $rid = $this->get_rand($arr); //根據概率獲取獎項id 
        $res = $awards[$rid - 1]['awards']; //中獎項 
        return $res;
    }


    public function get_rand($proArr)
    {
        $result = '';
        //概率陣列的總概率精度 
        $proSum = array_sum($proArr);
        //概率陣列迴圈 
        foreach ($proArr as $key => $proCur) {
            $randNum = mt_rand(1, $proSum);
            if ($randNum <= $proCur) {
                $result = $key;
                break;
            } else {
                $proSum -= $proCur;
            }
        }
        unset($proArr);
        return $result;
    }
    //減去中獎品項
    public function reduceQuantity($awards)
    {
        $quantityArr = lineModel::selectAwards($awards);
        if ($quantityArr[0]->quantity > 0) {
            $quantity = ($quantityArr[0]->quantity) - 1;
            $id = $quantityArr[0]->id;
            lineModel::updateAwards($quantity, $id);
        }
        return;
    }

    //抽獎歷史 
    public function bbb()
    {
    }

    //使用贈品
    public function useAwards(Request $request)
    {

        // $return = DB::update("UPDATE `line_awords` SET `quantity` =  '$quantity' WHERE `line_awords`.`id` = $id ");
        // return $return;
        
        $awardsID = $request->awardsID;
        lineModel::updateAwardsStatus($awardsID);
        $user_profile['userId'] = $request->lineID;
        $list = lineModel::getLotteryHistory($user_profile);


        return response()->json($list, 200);
    }
    public function test(Request $request)
    {
        $orderNum = 'aa123457';
        $msg = '成功';
        $list = orderModel::selectOrderNum($orderNum);
        var_dump($list);
        var_dump($list[0]->orderPhone);
        $orderName = 'aa';
        $orderPhone = '0912345677';
        $today = date('Y/m/d');
        // $entryOrder = orderModel::insertOrderNum($orderName,$orderPhone,$orderNum,$today);
        // var_dump($entryOrder);


    }


    public function entryOrder(Request $request)
    {

        $orderName = $request->orderName;
        $orderPhone = $request->orderPhone;
        $orderNum = $request->orderNum;
        $today = date('Y/m/d');
        $orderDetail = orderModel::selectOrderNum($orderNum);
        if (mb_strlen($orderName) <= 1 || mb_strlen($orderPhone) != 10 || mb_strlen($orderNum) <= 6  || mb_strlen($orderNum) >= 10) {
            //訂單號 S+22中山店共9碼 其他店7碼
            return response()->json('wrongFormat', 200);
        }
        if ($orderDetail) {
            return response()->json('alreadyUse', 200);
        }
        $entryOrder = orderModel::insertOrderNum($orderName, $orderPhone, $orderNum, $today);
        if ($entryOrder) {
            return response()->json('success', 200);
        }
    }

    public function searchOrder(Request $request)
    {
        $searchOrderPhone = $request->searchOrderPhone;
        $searchOrderNum = $request->searchOrderNum;
        $orderDetail = orderModel::selectOrderNum($searchOrderNum);
        if ($orderDetail) {
            if ($orderDetail[0]->orderPhone != $searchOrderPhone) {
                return response()->json('wrongPhone', 200);
            }
            return response()->json('alreadyEntry', 200);
        } else {
            return response()->json('yetEntry', 200);
        }
    }

    public function gagu(Request $request)
    {
        return view('gagu');
    }

    public function gaguList(Request $request)
    {

        $awardsList = lineModel::getAllAwards();
        $password = $request->password;

        if ($password == "gagu168") {
            return view('gaguList', compact('awardsList'));
        } else {
            return view('gagu');
        }
    }
    public function lotteryBox(Request $request)
    {
        $list = Session::get('list');

        return view('lotteryBox', compact('list'));
    }
}
