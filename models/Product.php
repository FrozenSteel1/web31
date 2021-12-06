<?php


class Product
{
    public static function getProductById($id)
    {

        $db=Db::getConnect();
        $sql = "SELECT * FROM products WHERE id=:id";
        $result = $db->prepare($sql);
        $result->bindParam(':id', $id, PDO::PARAM_INT);
        $result->setFetchMode(PDO::FETCH_ASSOC);
        $result->execute();
        $product = $result->fetch();


        return $product;


    }

    public static function getProductList()
    {

        $db=Db::getConnect();

        $result = $db->query("SELECT * FROM products");
        $productList = array();
        $i = 0;
        while ($row = $result->fetch()) {
            $productList[$i]['id'] = $row['id'];
            $productList[$i]['header'] = $row['header'];
            $productList[$i]['price'] = $row['price'];
            $i++;
        };
        return $productList;


    }

    public static function getProductOverPrice($price)
    {
        $paramsPath = ROOT . '/config/db_config.php';
        $params = include($paramsPath);

        // Устанавливаем соединение
        $dsn = "mysql:host={$params['host']};dbname={$params['db_name']}";
        $db = new PDO($dsn, $params['user'], $params['password']);
        // Задаем кодировку
        $db->exec("set names utf8");

        $result = $db->query("SELECT * FROM products WHERE price>$price");
        $productList = array();
        $i = 0;
        while ($row = $result->fetch()) {
            $productList[$i]['id'] = $row['id'];
            $productList[$i]['header'] = $row['header'];
            $productList[$i]['price'] = $row['price'];
            $i++;
        };
        return $productList;

    }

    public static function productDelete($id)
    {

        $paramsPath = ROOT . '/config/db_config.php';
        $params = include($paramsPath);

        // Устанавливаем соединение
        $dsn = "mysql:host={$params['host']};dbname={$params['db_name']}";
        $db = new PDO($dsn, $params['user'], $params['password']);
        // Задаем кодировку
        $db->exec("set names utf8");


        $result = $db->query("DELETE FROM products  WHERE id=$id");

    }

}