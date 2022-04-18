
    $(document).ready(function() {
        if ($(location).attr('href').slice(-4) == '3in1') {
            $('html, body').animate({
                scrollTop: $('#3in1').offset().top
            }, 80);
        } else {
            $('#indexpop').modal('show');
        }
    });

    function showmodal() {
        $('#quickMenu').modal('show');
    }
    $(".number").on("keypress keyup blur", function(event) {
        $(this).val($(this).val().replace(/[^\d].+/, ""));
        if ((event.which < 48 || event.which > 57)) {
            event.preventDefault();
        }
    });
    $('#orderEntry').click(function() {
        $('#entryModal').modal('show');
    });
    $('#searchOrder').click(function() {
        $('#searchModal').modal('show');
    });

    $("#entryOrderNum").click(function() {
        orderName = $('#orderName').val();
        orderPhone = $('#orderPhone').val();
        orderNum = $('#orderNum').val();
        if (orderName.length == 0 | orderPhone.length != 10 | orderNum.length == 0) {
            alert('輸入格式錯誤');
            // console.log('輸入格式錯誤');
        } else {
            entryOrder();
        }
        $('#promo0_1').val();
    });

    $("#searchEntryOrder").click(function() {
        searchOrderPhone = $('#searchOrderPhone').val();
        searchOrderNum = $('#searchOrderNum').val();
        if (searchOrderPhone.length != 10 | searchOrderNum.length == 0) {
            alert('輸入格式錯誤');
            // console.log('輸入格式錯誤');
        } else {
            searchOrder();
        }
    });

    function closeMenu() {
        $('#closeMenu').trigger('click');
    }

    function entryOrder() {
        JSON.parse
        $.ajax({
            type: 'GET',
            url: 'entryOrder',
            dataType: 'json',
            data: {
                orderName: orderName,
                orderPhone: orderPhone,
                orderNum: orderNum,
                _token: '{{csrf_token()}}'
            },
            success: function(msg) {
                switch (msg) {
                    case 'wrongFormat':
                        $("#alertinfo").removeClass().addClass("alert alert-warning")
                        $('#alertinfo').show().text('電話或訂單號格式錯誤');
                        $('#orderPhone').val('');
                        $('#orderNum').val('');
                        break;
                    case 'alreadyUse':
                        $("#alertinfo").removeClass().addClass("alert alert-info")
                        $('#alertinfo').show().text(orderNum + '此訂單號已登錄過');
                        $('#orderNum').val('');
                        break;

                    default:
                        $("#alertinfo").removeClass().addClass("alert alert-success")
                        $('#alertinfo').show().text(orderNum + '登錄成功');
                        $('#orderNum').val('');
                        break;
                }

                console.log(msg);
            },
            error: function(error) {
                console.log('error');
            }
        });
    }

    function searchOrder() {
        JSON.parse
        $.ajax({
            type: 'GET',
            url: 'searchOrder',
            dataType: 'json',
            data: {
                searchOrderPhone: searchOrderPhone,
                searchOrderNum: searchOrderNum,
                _token: '{{csrf_token()}}'
            },
            success: function(msg) {
                switch (msg) {
                    case 'wrongPhone':
                        $("#alertinfo2").removeClass().addClass("alert alert-warning")
                        $('#alertinfo2').show().text('電話與單號不匹配');
                        break;
                    case 'yetEntry':
                        $("#alertinfo2").removeClass().addClass("alert alert-info")
                        $('#alertinfo2').show().text(searchOrderNum + '此單號未登錄');
                        $('#searchOrderNum').val('');
                        break;

                    default:
                        $("#alertinfo2").removeClass().addClass("alert alert-success")
                        $('#alertinfo2').show().text(searchOrderNum + '此單號已登錄');
                        $('#searchOrderNum').val('');
                        break;
                }


                console.log(msg);
            },
            error: function(error) {
                console.log('error');
            }
        });
        
    }
    