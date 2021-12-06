<?php


class ProductController
{
public function actionShowAllProducts(){

    $productList=Product::getProductList();
    require_once (ROOT.'/view/productList.php');
    return true;
}
public function actionShowAllProductsOver($price){

    $productList=Product::getProductOverPrice($price);
    require_once (ROOT.'/view/productList.php');
    return true;
}
public function actionProductDeleteById($id){
    Product::productDelete($id);
   // require_once (ROOT.'/view/productList.php');
    return true;
}
public function actionProductAdd(){

    $id=$_POST['add'];
    $product=Product::getProductById($id);
    $_SESSION['cart'][]=$product;




    return true;
}

}