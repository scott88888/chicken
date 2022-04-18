<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;
class lineModel extends Model
{
  use HasFactory;

  public static function selectID($id)
  {
    $selectID = DB::select("SELECT * FROM line_user WHERE `lineID` ='$id'");    
    return $selectID;

  }
  public static function createLineID($user_profile)
  {
    
    $createLine = DB::insert("INSERT INTO `line_user` (`id`, `lineID`, `displayName`)
    VALUES (NULL, '$user_profile[userId]', '$user_profile[displayName]' )");
    return $createLine;

  }
  public static function selectLottery($user_profile)
  {
    
    $selectLottery = DB::select("SELECT * FROM line_lottery WHERE `lineID` ='$user_profile[userId]'");
    return $selectLottery;

  }
  public static function getAllAwards()
  {
    
    $return = DB::select("SELECT * FROM line_awords");
    return $return;

  }

  public static function selectAwards($awards)
  {
    
    $return = DB::select("SELECT * FROM line_awords WHERE `awards` ='$awards'");
    return $return;

  }

  public static function updateAwards($quantity,$id)
  {

    $return = DB::update("UPDATE `line_awords` SET `quantity` =  '$quantity' WHERE `line_awords`.`id` = $id ");
    return $return;

  }
  public static function setLotteryHistory($user_profile,$awards,$today,$time,$useStatus)
  {
    
    $return = DB::insert("INSERT INTO `line_lottery` (`id`, `lineID`, `lotteryDate`, `time`, `lotteryAwards` ,`status`)
    VALUES (NULL, '$user_profile[userId]', '$today', '$time', '$awards', '$useStatus')");
    return $return;

  }

  public static function getLotteryHistory($user_profile)
  {
    
    $return = DB::select("SELECT * FROM line_lottery WHERE `lineID` ='$user_profile[userId]'");
    return $return;
 

  }

  public static function updateAwardsStatus($id)
  {

    $return = DB::update("UPDATE `line_lottery` SET `status` =  '1' WHERE `line_lottery`.`id` = $id ");
    return $return;

  }


}