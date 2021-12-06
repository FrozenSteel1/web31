<?php


class GoodController
{
public function actionShow($id){


    $arr=array(['header'=>'Кросовочки','price'=>'10000'],['header'=>'Кедики','price'=>'5000']);

    require_once (ROOT.'/view/showGood'.'.'.'php');
    return true;

}
}