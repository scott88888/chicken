<!doctype html>
<html lang="zh-TW">

<head>
@include('includes.head')
<link href="css/lineLottery.css" rel="stylesheet" type="text/css" />
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
            <a href="https://www.gagu.life/?utm_source=hellospring&utm_medium=top" target="_blank"> @csrf<img src="imgs/topleft.png" alt="" class="imgWidth"></a>
        </div>

    </div>
    <form class="form-signin">
        <div style="background: #F9EDDB;">
            <div class="bannertop">
                <a href="{{ url('/lotteryBox') }}">@csrf<img class="bannerImg" src="imgs/top01.png" alt=""></a>
                <a href="{{ url('/index') }}"> @csrf <img class="bannerImg" src="imgs/top02.png" alt=""></a>
            </div>
            <div class="mobileDiss" style="text-align: left;">
                <img class="pcImg" class="" src="imgs/lotteryL.png">
                <a href="#" id="startLo"><img id="imgFrm" style="width: 35%;" class="" src="imgs/ban042.gif"></a>
            </div>
            <div class="pcDiss">
                <div class="" style="text-align: center;">
                    <a href=""><img style="width: 38%;" class="" src="imgs/ban11.png"></a>
                </div>
                <div class="" style="text-align: center;">
                    <a href=""><img style="width: 85%;padding: 2%;" class="" src="imgs/ban02.png"></a>
                </div>
                <div class="" style="text-align: center;">
                    <a href=""><img style="width: 75%;padding-bottom: 5%;" class="" src="imgs/ban13.png"></a>
                </div>
                <div class="" style="text-align: center;">
                    <a href="#" id="startLo2"><img id="imgFrm" style="width: 70%;margin-left: 7%;" class="" src="imgs/ban042.gif"></a>
                </div>
                <div style="font-size: 2rem;padding-left: 5%;">
                    <p>??????????????? </p>
                    <p>1??????????????????????????????????????? </p>
                    <p>2?????????????????????????????????????????? </p>
                    <p>3?????????????????????????????????????????????????????????????????????8???????????? </p>
                    <p>4????????????????????????????????????2022/5/2(???) </p>
                    <p>5???GAGU????????????????????????????????????</p>
                </div>
            </div>
        </div>
        <div class="" style="text-align: center;">
            <img style="width: 100%;padding-top: 10%;height: 340px;background: #F9EDDB;" class="" src="imgs/ban12.png">
        </div>
        <input style="display: none;" type="text" id="lotteryId" readonly value="{{ $awards }}">
    </form>
    <div class="modal fade" id="shiwGift" onclick="$('#shiwGift').modal('hide');" tabindex="-1" aria-labelledby="" style="display:none;">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="" style="text-align: center;">
                        <a href="#"><img id="imgFrm2" class="" src=""></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
    <script src="js/lineLottery.js"></script>
</html>