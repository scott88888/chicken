<!DOCTYPE html>
<html lang="zh-TW">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>GAGU各項查詢</title>
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <link href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">
  <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
</head>
<style>
  td {
    text-align: center;
  }
</style>

<body>
  
  <table id="example" class="table table-striped" style="width:100%;border:3px #cccccc solid" cellpadding="10" border='1'>
    <thead>
      <tr>
        <th>獎項</th>
        <th>剩餘數量</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($awardsList as $ST)
      <tr>
        <td>{{ $ST->awards }}</td>
        <td>{{ $ST->quantity }}</td>
      </tr>
      @endforeach

    </tbody>
  </table>
</body>

<script>
  $(document).ready(function() {
    $('#example').DataTable({

      language: {
        "emptyTable": "無資料...",
        "processing": "處理中...",
        "loadingRecords": "載入中...",
        "lengthMenu": "顯示 _MENU_ 項結果",
        "zeroRecords": "沒有符合的結果",
        "info": "顯示第 _START_ 至 _END_ 項結果，共 _TOTAL_ 項",
        "infoEmpty": "顯示第 0 至 0 項結果，共 0 項",
        "infoFiltered": "(從 _MAX_ 項結果中過濾)",
        "infoPostFix": "",
        "search": "搜尋:",
        "paginate": {
          "first": "第一頁",
          "previous": "上一頁",
          "next": "下一頁",
          "last": "最後一頁"
        },
        "aria": {
          "sortAscending": ": 升冪排列",
          "sortDescending": ": 降冪排列"
        }
      },
      order: [
        [0, "desc"]
      ],
      aLengthMenu: [
        [25, 50, 100, 200, -1],
        [25, 50, 100, 200, "All"]
      ],
      iDisplayLength: -1
    });
    $("#example_length").css({
      "display": "none"
    });
    $("#example_filter").css({
      "display": "none"
    });
    $("#example").css({
      "font-size": "0.8rem"
    });
    $("#example_info").css({
      "font-size": "0.7rem"
    });
    $("#example_paginate").css({
      "font-size": "0.7rem",
      "text-align": "right"
    });



  });
</script>

</html>