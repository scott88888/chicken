
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