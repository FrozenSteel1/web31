<?php


class User
{
public static function saveUser($user){

    $db=Db::getConnect();
    $sql = 'INSERT INTO users (login,password) '
        . 'VALUES (:login,:password)';

    // Получение и возврат результатов. Используется подготовленный запрос
    $result = $db->prepare($sql);
    $result->bindParam(':login', $user['login'], PDO::PARAM_STR);
    $result->bindParam(':password', $user['password'], PDO::PARAM_STR);
    return $result->execute();

}
public static function getUserById($login,$password){


    $db=Db::getConnect();

    $sql = 'SELECT * FROM users WHERE login = :login AND password=:password';

    // Получение и возврат результатов. Используется подготовленный запрос
    $result = $db->prepare($sql);
    $result->bindParam(':login', $login, PDO::PARAM_STR);
   $result->bindParam(':password', $password, PDO::PARAM_STR);
    $result->setFetchMode(PDO::FETCH_ASSOC);
    $result->execute();

    return $result->fetch();
}

public static function checkUser(){
    if (isset($_SESSION['user'])){
        return true;
    }
    return false;
}
}