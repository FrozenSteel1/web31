<?php


class NavController
{
public function actionIndex(){
    require_once (ROOT.'/view/main.php');
    return true;
}
    public function actionShop(){
        require_once (ROOT.'/view/shop.php');
        return true;
    }
}