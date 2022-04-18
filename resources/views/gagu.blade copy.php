<!DOCTYPE html>
<html lang="zh-TW">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
</head>
<style>

</style>

<body>
<form action="{{ url('/gaguList') }}" method="post">@csrf
        <div class="container">
            <div class="input-group mb-3" style="margin-top: 10%;">
                <span class="input-group-text" id="basic-addon1">輸入驗證</span>
                <input type="text" class="form-control" placeholder="keyword" aria-label="Username" aria-describedby="basic-addon1" name="password">
            </div>
            <div class="row">
                <div style="text-align:center"><button type="submit" class="btn btn-primary">送出</button></div>
            </div>
        </div>
    </form>
</body>

<script>
    function init() {
        _oTag = document.getElementById("divLoading");
        _oTag.style.display = "none"; //隱藏動畫
    }

    if (window.attachEvent) {
        window.attachEvent('onload', init);
    } else {
        window.addEventListener('load', init, false);
    }
</script>

</html>