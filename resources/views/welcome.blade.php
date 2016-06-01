<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>Laravel</title>
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link href='https://fonts.googleapis.com/css?family=Poiret+One' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <style>
    html, body, p {
        width: 100%;
        height: 100%;
    }
    </style>
</head>
<body>

    @include('flash::message')

    <p style="line-height: 650px;font-size: 100px;text-align: center;font-family: 'Poiret One', cursive;">Magical girl Laravel</p>

    <script src="//code.jquery.com/jquery.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <script src="{{ asset('js/all.js') }}"></script>

</body>
</html>
