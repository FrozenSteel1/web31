<?php

// FRONT CONTROLLER

// Общие настройки

session_start();

// Подключение файлов системы
define('ROOT', dirname(__FILE__));

require_once(ROOT.'/components/Router.php');
require_once(ROOT.'/components/Db.php');
require_once(ROOT.'/models/Product.php');
require_once(ROOT.'/models/User.php');


// Вызов Router
$router = new Router();
$router->run();
