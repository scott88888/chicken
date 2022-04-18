

<!doctype html>
<html lang="zh-TW">

<head>
    @include('includes.head')
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+TC:wght@500&display=swap" rel="stylesheet">
    <link href="css/lotteryBox.css" rel="stylesheet" type="text/css" />
</head>
<script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-TLXCRNS');
    </script>

<body>
    <div>
        <div class="leftTop">
            <a href="https://www.gagu.life/?utm_source=hellospring&utm_medium=top" target="_blank"> @csrf<img class="leftImgTop" src="imgs/topleft.png" alt="" style=""></a>
        </div>
    </div>
    <form class="form-signin">
        <div style="background: #F9EDDB;">
            <div class="topImg">
                <a href="{{ url('/index') }}"> @csrf <img src="imgs/back.png" alt="" class="topWidth"></a>
            </div>
            <div class="pcMargin">
                <div class="" style="text-align: center;margin: 1% 0%;">
                    <a href=""><img style="width: 90%;" class="" src="imgs/boxtitle.png"></a>
                </div>
                <div class="" style="text-align: center;">
                    <img style="width: 90%;" class="" src="imgs/box01.png">
                </div>
                <div class="" style="text-align: center;">
                    <table>
                        @foreach ($list as $ST)
                        <tr>
                            <td width="12%" font color="blue" style="text-align: right;">{{ $ST->lotteryDate }}</td>
                            <td width="65%">{{ $ST->lotteryAwards }}</td>

                            <td width="23%">
                                <button type="button" id="useBtn{{ $ST->id }}" value="{{ $ST->id }}">
                                    @if ($ST->status == 0)
                                    <img id="useImg{{ $ST->id }}" style="width: 100%;" class="" src="imgs/use.png">
                                    @else
                                    <img style="width: 100%;" class="" src="imgs/unuse.png">
                                    @endif
                                </button>
                            </td>

                        </tr>
                        @endforeach

                    </table>
                </div>
                <div class="" style="text-align: center;">
                    <img style="width: 90%;" class="" src="imgs/boxbon.png">

                </div>
                <div class="textFont">

                    <p class="textFont2">獎品注意事項：</p>
                    <p>1、北歐春分節線上購物金需滿額方可使用，並且不得與實體購物金併用。  </p>
                    <p>2、HOKUM3.0 天絲舒眠床墊-5呎規格：寬152公分/深188公分。 </p>
                    <p>3、得利DIY塗料搭配組內含：得利健康居L1（11色選1）、滾筒刷具組、得利健康居G1（白色系）。 </p>
                    <p>4、HOKUM3.0 天絲舒眠床墊、Comfort 100%純棉床包組：請於5/2前截圖禮物盒並主動私訊GAGU官方粉絲團唷!逾期視為放棄領獎。 </p>
                    <p>5、得利DIY塗料搭配組、質感皮革禮盒兌換方式：至GAGU任一門市下單兌換，獎品將於活動結束後統一寄出。 </p>
                    <p>6、線上購物金、商品折扣等優惠獎項需到店出示給家配師協助使用。 </p>
                    <p class="textFont2">共同注意事項： </p>
                    <p>1、獎項使用時須保持網路暢通，並讓家配師按下「使用」按鈕。  </p>
                    <p>2、如誤觸致優惠券失效，恕無法補發或以任何形式補償。  </p>
                    <p>3、購物金不得與出清品、青年成家專案、一桌四椅8折專案併用。  </p>
                    <p>4、所有獎項僅能使用一次，單筆訂單僅能使用一張購物金。 </p> 
                    <p>5、優惠僅能使用於實體店面，不適用於網路購買。 </p>
                    <p>6、本活動抽獎贈品以實物為準，限中獎人本人領取，中獎人不可要求折抵現金、轉讓他人領獎或更換獎項內容。</p>
                    <p>7、本活動獎項為機會中獎所得，依稅法規定，中獎者為本國籍者，獎項金額依法需申報所得，並由本公司代為扣繳，請繳交身分證影本作為報稅憑證；中獎者若為外國人(含大陸人士和其他不具中華民國國籍者)，機會中獎所得稅為20%。中獎者應自付中獎商品之稅金，否則視同放棄。</p>
                    <p>8、HOKUM3.0 天絲舒眠床墊、Comfort 100%純棉床包組、得利DIY塗料搭配組、質感皮革禮盒配送範圍不包含花東、山區、離島地區。</p>
                    <p>9、GAGU保留變更或終止本活動之權利。</p>

                </div>
            </div>
        </div>
    </form>
    <div class="modal fade" id="shiwGift" onclick="$('#shiwGift').modal('hide');" tabindex="-1" aria-labelledby="" style="display:none;">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="" style="text-align: center;">
                        <a href="#"><img id="imgFrm2" style="width: 100%;padding: 2%;" class="" src=""></a>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-bs-dismiss="modal" onclick="$('#shiwGift').modal('hide');">關閉</button>
                </div>
            </div>
        </div>
    </div>
</body>
<script>
    $("button").click(function () {
    awardsID = $(this).val();
    lineID = $('#lineID').val();
    JSON.parse
    $.ajax({
        type: 'post',
        url: 'useAwards',
        dataType: 'json',
        data: {
            awardsID: awardsID,
            lineID: lineID,
            _token: '{{csrf_token()}}'
        },
        success: function () {
            $("#useImg" + awardsID).attr("src", "imgs/unuse.png");
            console.log($('#useBtn' + awardsID).val());
        },
        error: function (error) {
            console.log('error');
        }
    });


});
</script>
</html>