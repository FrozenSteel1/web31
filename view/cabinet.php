<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1>Личный кабинет</h1>
<h2>Привет <?echo $_SESSION['user']['login']?></h2>
<a href="./logout"> Выйти</a>
</body>
</html>
