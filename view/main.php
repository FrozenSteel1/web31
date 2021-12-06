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
<h1>Главная страница</h1>

<a href="cabinet">В кабинет</a>

<?php if (isset($_SESSION['user'])): ?>
    <h2>Пользователь <?echo $_SESSION['user']['login'];?> </h2>
    <a href="user/logout">Выйти</a>
<?php endif; ?>
<h2>Товаров в корзине</h2>
<h3 id="cart-count">0</h3>
<button id="add-to-cart" data-id="1"> Добавить в корзину</button>
<script src="/template/js/jquery.js"></script>
<script src="/template/js/jquery.cycle2.min.js"></script>
<script src="/template/js/jquery.cycle2.carousel.min.js"></script>
<script src="/template/js/bootstrap.min.js"></script>
<script src="/template/js/jquery.scrollUp.min.js"></script>
<script src="/template/js/jquery.prettyPhoto.js"></script>
<script src="/template/js/main.js"></script>
</body>
</html>
