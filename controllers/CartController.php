<?php


class CartController
{
    public function actionDelete($id)
    {
        foreach ($_SESSION['cart'] as $key => $product) {

            if ($product['id'] == $id) {
                unset($_SESSION['cart'][$key]);

            }
        }
        require_once(ROOT . '/view/cart.php');
        return true;
    }

    public function actionIndex()
    {

        require_once(ROOT . '/view/cart.php');
        return true;
    }
    public function actionAddAjax($id){

        var_dump(count($_SESSION['cart'])+1);

        if (isset($_SESSION['cart']))
        {

          $count=count($_SESSION['cart'])+1;

        return $count;
        }
        return true;
    }
}