<?php


class Db
{
    public static function getConnect(){
        $paramsPath = ROOT . '/config/db_config.php';
        $params = include($paramsPath);

        // Устанавливаем соединение
        $dsn = "mysql:host={$params['host']};dbname={$params['db_name']}";
        $db = new PDO($dsn, $params['user'], $params['password']);
        // Задаем кодировку
        $db->exec("set names utf8");
        return $db;
    }

}