<!doctype html>

<html lang="zh-TW">

<head>
<!-- <meta http-equiv="refresh" content="0;url=http://hellospring.gagu.life/" /> -->
    @include('includes.head')
    <link href="css/index.css" rel="stylesheet" type="text/css" />
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
        <div class="rightTop" loading="lazy">
            <img class="rightTopImg" src="imgs/topright.png" alt="" onclick="showmodal()">
        </div>
        <div class="leftTop" loading="lazy">
            <a href="https://www.gagu.life/?utm_source=hellospring&utm_medium=top" target="_blank"> <img class="leftTopImg" src="imgs/topleft.png" alt=""></a>
        </div>
        <div class="rightBottom" loading="lazy">
            <a href="#3in1" target="_top"> <img src="imgs/rightBottom.gif" alt="" style="width: 65%;"></a>
        </div>
    </div>
    <div style="background: #F9EDDB;" id="webtop">
        <div class="mobileTopImg">
            <div class="" style="text-align: center;" loading="lazy">
                <a href="{{ $url }}"><img style="width: 38%;padding-top: 20%;" class="" src="imgs/ban01.png"></a>
            </div>
            <div class="" style="text-align: center;" loading="lazy">
                <a href="{{ $url }}"><img style="width: 85%;padding: 2%;" class="" src="imgs/ban02.png"></a>
            </div>
            <div class="" style="text-align: center;" loading="lazy">
                <a href="{{ $url }}"><img style="width: 54%;padding-bottom: 5%;" class="" src="imgs/ban03.png"></a>
            </div>
            <div class="" style="text-align: center;" loading="lazy">
                <a href="{{ $url }}"><img style="width: 70%;margin-left: 7%;" class="" src="imgs/ban04.gif"></a>
            </div>
            <div class="" style="text-align: center;" loading="lazy">
                <a href="{{ $url }}"><img style="width: 100%;" class="" src="imgs/ban05.png"></a>
            </div>
        </div>
        <div class="pctopImg" loading="lazy">
            <img id="pcTop" class="topbackL" style="width: 100%;" class="" src="imgs/pcTopImg.png">
            <a href="{{ $url }}"><img class="topbackR" src="imgs/ban04.gif"></a>
        </div>
        <div class="pcMargin30" loading="lazy">
            <div style="text-align: center;">
                <a href=""><img id="3in1" name="3in1" style="width: 90%;margin-top: 10%;" class="" src="imgs/3in1.png"></a>
            </div>
            <div class="" style="text-align: center;">
                <a id="orderEntry"><img style="padding: 5%;width: 30%;" class="" src="imgs/emtry.png"></a>
                <a id="searchOrder"><img style="padding: 5%;width: 30%;" class="" src="imgs/search.png"></a>
            </div>
            <div class="logintext" loading="lazy">
                <div class="logintext2"> ???????????????3/7(???)~5/2(???)</div>
                <div class="logintext2"> ????????????????????????5?????????????????????</div>
                <p>* ???????????????????????????5?????????????????????????????????????????????????????????</p>
                <p>* ????????????????????????10???????????????????????????!</p>
                <p>* ???????????????5/2(???)23:59??????????????????????????????????????????</p>
                <p>* ????????????????????????????????????????????????????????????????????????????????????????????????????????????</p>
                <p>* ????????????GAGU????????????GS???????????? </p>
                <p>* 5/13(???)???GAGU??????????????????????????????</p>
                <p>* ???????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????(???????????????????????????????????????????????????)???????????????????????????20%??????????????????????????????????????????????????????????????????</p>
                <p>* ????????????????????????????????????????????????????????????</p>
                <p>* GAGU??????????????????????????????????????????</p>
            </div>

            <div id="discount" style="text-align: center;" loading="lazy">
                <div style="font-size: 4rem;color: #836253;padding-top: 10%;padding-bottom: 3%;font-family: 'Noto Sans TC', sans-serif;">
                    <span>???????????????&nbsp&nbsp????????????</span>

                </div>
                <img style="width: 90%;" class="" src="imgs/onetable.png">
                <div style="font-size: 2rem;color: #836253;font-family: 'Noto Sans TC', sans-serif;">
                    ???????????????????????????????????????8?????????????????????????????????
                </div>
            </div>
            <div class="" style="text-align: center;" loading="lazy">
                <a href="https://www.gagu.life/index.php?id_category=669&controller=category&id_lang=1/?utm_source=hellospring&utm_medium=post&utm_campaign=tableandchairs" target="_blank"><img style="padding: 5%;width: 40%;" class="" src="imgs/listhere.png"></a>
            </div>

            <div id="myroom" name="myroom" style="text-align: center;" loading="lazy">
                <div style="font-size: 4rem;color: #836253;padding-top: 10%;padding-bottom: 3%;font-family: 'Noto Sans TC', sans-serif;">
                    <span>????????????DIY</span>
                </div>
                <a href=""><img style="width: 90%;padding-bottom: 5%;" class="" src="imgs/room.png"></a>
            </div>


            <div id="cooperate" name="cooperate" style="text-align: center;" loading="lazy">
                <div style="font-size: 4rem;color: #836253;padding-top: 10%;padding-bottom: 3%;font-family: 'Noto Sans TC', sans-serif;">
                    <span>????????????</span>
                </div>
                <a href="https://bit.ly/3JKsmbM" target="_blank"><img style="width: 90%;" class="" src="imgs/spring1.png"></a>
                <a href="https://bit.ly/3Imp91R" target="_blank"><img style="width: 90%;padding-bottom: 5%;" class="" src="imgs/spring2.png"></a>
            </div>

            <div id="playdiy" name="playdiy" style="text-align: center;" loading="lazy">
                <div style="font-size: 4rem;color: #836253;padding-top: 10%;padding-bottom: 5%;font-family: 'Noto Sans TC', sans-serif;">
                    <span>????????????</span>
                </div>
                <a href="https://bit.ly/3sgmQbd" target="_blank"><img style="width: 90%;" class="" src="imgs/diych.png"></a>
            </div>
            <div id="dream" name="dream" class="" style="text-align: center;" loading="lazy">
                <div style="font-size: 4rem;color: #836253;padding-top: 10%;padding-bottom: 3%;font-family: 'Noto Sans TC', sans-serif;">
                    <span>GAGU????????????</span>
                </div>
                <a><img style="width: 90%;" class="" src="imgs/dream.png"></a>
            </div>
            <div class="" style="text-align: center;" loading="lazy">
                <a href="https://docs.google.com/forms/d/e/1FAIpQLSd4bRDdu53EVb0NQT4cBGW9Hvrnrpy-8Ggru1hY8nPdPYutCg/viewform" target="_blank"><img style="padding: 5%;width: 40%;" class="" src="imgs/apply1.png"></a>
            </div>
            <div id="people" name="people" class="" style="text-align: center;" loading="lazy">
                <div style="font-size: 4rem;color: #836253;padding-top: 10%;padding-bottom: 3%;font-family: 'Noto Sans TC', sans-serif;">
                    <span>????????????</span>
                </div>
                <a><img style="width: 90%;padding-bottom: 5%;" class="" src="imgs/people.png"></a>
            </div>

        </div>
        <div class="" style="text-align: center;" loading="lazy">
            <a href="https://www.gagu.life/?utm_source=hellospring&utm_medium=down" target="_blank"><img style="" class="gagupng1" src="imgs/logo-01.png"></a>
            <div>
                <a href="https://sleep.gagu.life/?utm_source=hellospring&utm_medium=down" target="_blank"><img class="gagupng2" src="imgs/logo-03.png"></a>
                <a href="https://gagudecorator.gagu.life/?utm_source=hellospring&utm_medium=down" target="_blank"><img class="gagupng2" src="imgs/logo-02.png"></a>
            </div>



            <img id="" style="width: 100%;" class="" src="imgs/bon03.png">
        </div>
    </div>
    <div class="modal fade" id="entryModal" tabindex="-1" aria-labelledby="" style="display:none;" loading="lazy">
        <div class="modal-dialog">
            <div class="modal-content">

                <div class="" style="text-align: center;">
                    <img id="imgFrm2" onclick="$('#entryModal').modal('hide');" style="width: 100%;" class="" src="imgs/entry.png">
                </div>
                <div style="background-color: #ffffff;">
                    <div class="serpop">??????</div>
                    <input type="text" class="textpop" id="orderName">
                </div>
                <div style="background-color: #ffffff;">
                    <div class="serpop">????????????</div>
                    <input type="text" class="textpop" id="orderPhone">
                </div>
                <div style="background-color: #ffffff;">
                    <div class="serpop">?????????</div>
                    <input type="text" class="textpop" id="orderNum">
                </div>
                <div class="" id="alertinfo" role="alert" style="display: none;">
                </div>
                <div style="text-align: center;">
                    <img id="entryOrderNum" style="width: 100%;" class="" src="imgs/submit.png">
                </div>
            </div>
        </div>
    </div>

    <div class="modal modal30 fade" id="searchModal" tabindex="-1" aria-labelledby="" style="display:none;" loading="lazy">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="" style="text-align: center;">
                    <img id="imgFrm2" onclick="$('#searchModal').modal('hide');" style="width: 100%;" class="" src="imgs/serbtn.png">
                </div>
                <div style="background-color: #ffffff;">
                    <div class="serpop">????????????</div>
                    <input type="text" class="textpop" id="searchOrderPhone">
                </div>
                <div style="background-color: #ffffff;">
                    <div class="serpop">?????????</div>
                    <input type="text" class="textpop" id="searchOrderNum">
                </div>
                <div class="" id="alertinfo2" role="alert" style="display: none;">
                </div>
                <div style="text-align: center;">
                    <img id="searchEntryOrder" style="width: 100%;" class="" src="imgs/submit.png">
                </div>
            </div>
        </div>  
    </div>
    <div class="modal fade menutext" id="quickMenu" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" loading="lazy">
        <div class="modal-dialog ">
            <div class="pcPadding20 modal-content">
                <div class="modal-body">
                    <div class="" style="text-align: center;">
                        <a href=""><img id="imgFrm2" onclick="$('#quickMenu').modal('hide');" style="width: 100%;" class="" src="imgs/poptop.png"></a>
                        <a href="#webtop" target="_top" style="text-decoration:none;" onclick="$('#quickMenu').modal('hide');">
                            <div class="pop"> ?????????????????????</div>
                        </a>
                        <a href="#3in1" target="_top" style="text-decoration:none;" onclick="$('#quickMenu').modal('hide');">
                            <div class="pop"> ?????????????????????</div>
                        </a>
                        <a href="#discount" target="_top" style="text-decoration:none;" onclick="$('#quickMenu').modal('hide');">
                            <div class="pop"> ???????????????&nbsp&nbsp????????????</div>
                        </a>
                        <a href="#myroom" target="_top" style="text-decoration:none;" onclick="$('#quickMenu').modal('hide');">
                            <div class="pop">????????????DIY</div>
                        </a>
                        <a href="#cooperate" target="_top" style="text-decoration:none;" onclick="$('#quickMenu').modal('hide');">
                            <div class="pop">????????????</div>
                        </a>
                        <a href="#playdiy" target="_top" style="text-decoration:none;" onclick="$('#quickMenu').modal('hide');">
                            <div class="pop">????????????</div>
                        </a>
                        <a href="#dream" target="_top" style="text-decoration:none;" onclick="$('#quickMenu').modal('hide');">
                            <div class="pop">GAGU????????????</div>
                        </a>
                        <a href="#people" target="_top" style="text-decoration:none;" onclick="$('#quickMenu').modal('hide');">
                            <div class="pop">????????????</div>
                        </a>

                    </div>


                </div>
                <div class="modal-footer">

                </div>
            </div>
        </div>
    </div>
    <div class="modal modal30 fade" id="indexpop" onclick="$('#indexpop').modal('hide');" tabindex="-1" aria-labelledby="">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="" style="text-align: center;">
                        <a href="#3in1" target="_top"><img id="" style="width: 100%;" class="" src="imgs/3in1.png" loading="lazy"></a>
                        <a class="close-btn popup-close">x</a>
                    </div>
                </div>

            </div>
        </div>
    </div>

</body>
<script src="js/index.js"></script>

</html>