<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Отзывы</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>

<div class="container">
    <form  method="post" class="center-block form-review" id="myform">
        <h2 class="center-block">Оставить отзыв</h2>
        <div class="form-group">
            <label for="title">Ф.И.О.</label>
            <input type="text" class="form-control" name="title" id="title"  required>
        </div>
        <div class="form-group">
            <label for="detail_text">Текст Отзыва</label>
            <textarea class="form-control" name="detail_text" id="detail_text" rows="5" required ></textarea>
        </div>
        <input type="hidden" id="_token"  name="_token" value="{{ csrf_token() }}">
        <button type="submit" class="btn btn-primary btn-block" name="submit" id="submit">Отправить</button>
    </form>
    <div class="reviews" id="reviews">
        @yield('posts')
    </div>
</div>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>
<script src="/js/app.js" ></script>
{{--<script src="js/app.js"></script>--}}
</body>
</html>