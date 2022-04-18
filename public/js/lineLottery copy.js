$('#startLo').click(function() {
    $('#shiwGift').modal('show');
    awards2()
});

$('#startLo2').click(function() {
    $('#shiwGift').modal('show');
    awards()
});

function showGift() {
    $('#shiwGift').modal('show');
};

function awards() {
    $('#shiwGift').css('top', '30%');
    $('#imgFrm2').attr('src', './imgs/open.gif');
    if ($('#lotteryId').val()) {
        switch ($('#lotteryId').val()) {
            case 'already':
                setTimeout(function() {
                    $('#shiwGift').css('top', '30%');
                    $('#imgFrm2').attr('src', './imgs/already.png');
                }, 1500);
                break;
            case 'HOKUM3.0 天絲舒眠床(5呎)':
                setTimeout(function() {
                    $('#shiwGift').css('top', '30%');
                    $('#imgFrm2').attr('src', './imgs/gift01.png');
                }, 1500);
                break;
            case '1,000元購物金(滿5萬可用)':
                setTimeout(function() {
                    $('#shiwGift').css('top', '30%');
                    $('#imgFrm2').attr('src', './imgs/gift02.png');
                }, 1500);
                break;
            case '2,000元購物金(滿6萬可用)':
                setTimeout(function() {
                    $('#shiwGift').css('top', '20%');
                    $('#imgFrm2').attr('src', './imgs/gift03.png');
                }, 1500);
                break;
            case '3,000元購物金(滿7萬可用)':
                setTimeout(function() {
                    $('#shiwGift').css('top', '20%');
                    $('#imgFrm2').attr('src', './imgs/gift04.png');
                }, 1500);
                break;
            case 'Comfort 100%純棉床包(顏色隨機)':
                setTimeout(function() {
                    $('#shiwGift').css('top', '20%');
                    $('#imgFrm2').attr('src', './imgs/gift05.png');
                }, 1500);
                break;
            case 'Iceberg 比利時冰山床 現省6,000':
                setTimeout(function() {
                    $('#shiwGift').css('top', '20%');
                    $('#imgFrm2').attr('src', './imgs/gift06.png');
                }, 1500);
                break;
            case 'DIANA 現省14,000元(原價58,900元)':
                setTimeout(function() {
                    $('#shiwGift').css('top', '20%');
                    $('#imgFrm2').attr('src', './imgs/gift07.png');
                }, 1500);
                break;
            case '下單即送質感皮革禮盒':
                setTimeout(function() {
                    $('#shiwGift').css('top', '20%');
                    $('#imgFrm2').attr('src', './imgs/gift08.png');
                }, 1500);
                break;
            case '得利DIY塗料搭配組':
                setTimeout(function() {
                    $('#shiwGift').css('top', '20%');
                    $('#imgFrm2').attr('src', './imgs/gift09.png');
                }, 1500);
                break;
            case '再接再厲':
                setTimeout(function() {
                    $('#shiwGift').css('top', '20%');
                    $('#imgFrm2').attr('src', './imgs/thanks.png');
                }, 1500);
                break;
            default:
                setTimeout(function() {
                    $('#shiwGift').css('top', '20%');
                    $('#imgFrm2').attr('src', './imgs/thanks.png');
                }, 1500);
                break;
        }
    }

}
function awards2() {
    $('#shiwGift').css('top', '20%');
    $('#imgFrm2').attr('src', './imgs/open.gif');
    if ($('#lotteryId').val()) {
        switch ($('#lotteryId').val()) {
            case 'already':
                setTimeout(function() {
                    $('#shiwGift').css('top', '20%');
                    $('#imgFrm2').css('width', '100%');
                    $('#imgFrm2').attr('src', './imgs/already.png');
                }, 1500);
                break;
            case 'HOKUM3.0 天絲舒眠床(5呎)':
                setTimeout(function() {
                    $('#shiwGift').css('top', '10%');
                    $('#imgFrm2').css('width', '60%');
                    $('#imgFrm2').attr('src', './imgs/gift01.png');
                }, 1500);
                break;
            case '1,000元購物金(滿5萬可用)':
                setTimeout(function() {
                    $('#shiwGift').css('top', '10%');
                    $('#imgFrm2').css('width', '60%');
                    $('#imgFrm2').attr('src', './imgs/gift02.png');
                }, 1500);
                break;
            case '2,000元購物金(滿6萬可用)':
                setTimeout(function() {
                    $('#shiwGift').css('top', '10%');
                    $('#imgFrm2').css('width', '60%');
                    $('#imgFrm2').attr('src', './imgs/gift03.png');
                }, 1500);
                break;
            case '3,000元購物金(滿7萬可用)':
                setTimeout(function() {
                    $('#shiwGift').css('top', '10%');
                    $('#imgFrm2').css('width', '60%');
                    $('#imgFrm2').attr('src', './imgs/gift04.png');
                }, 1500);
                break;
            case 'Comfort 100%純棉床包(顏色隨機)':
                setTimeout(function() {
                    $('#shiwGift').css('top', '10%');
                    $('#imgFrm2').css('width', '60%');
                    $('#imgFrm2').attr('src', './imgs/gift05.png');
                }, 1500);
                break;
            case 'Iceberg 比利時冰山床 現省6,000':
                setTimeout(function() {
                    $('#shiwGift').css('top', '10%');
                    $('#imgFrm2').css('width', '60%');
                    $('#imgFrm2').attr('src', './imgs/gift06.png');
                }, 1500);
                break;
            case 'DIANA 現省14,000元(原價58,900元)':
                setTimeout(function() {
                    $('#shiwGift').css('top', '10%');
                    $('#imgFrm2').css('width', '60%');
                    $('#imgFrm2').attr('src', './imgs/gift07.png');
                }, 1500);
                break;
            case '下單即送質感皮革禮盒':
                setTimeout(function() {
                    $('#shiwGift').css('top', '10%');
                    $('#imgFrm2').css('width', '60%');
                    $('#imgFrm2').attr('src', './imgs/gift08.png');
                }, 1500);
                break;
            case '得利DIY塗料搭配組':
                setTimeout(function() {
                    $('#shiwGift').css('top', '10%');
                    $('#imgFrm2').css('width', '60%');
                    $('#imgFrm2').attr('src', './imgs/gift09.png');
                }, 1500);
                break;
            case '再接再厲':
                setTimeout(function() {
                    $('#shiwGift').css('top', '10%');
                    $('#imgFrm2').css('width', '60%');
                    $('#imgFrm2').attr('src', './imgs/thanks.png');
                }, 1500);
                break;
            default:
                setTimeout(function() {
                    $('#shiwGift').css('top', '20%');
                    $('#imgFrm2').css('width', '100%');
                    $('#imgFrm2').attr('src', './imgs/thanks.png');
                }, 1500);
                break;
        }
    }

}