<?php

require_once (ROOT . '/models\Cart.php');
class CartController{
    
    public function actionIndex(){
        $product = Cart::getProduct();
        require_once ROOT . '/views\cart\cart.php';
    }

    public function actionAdd($id){
        
        
        Cart::addProduct($id);
    }

    public function actionBuy($id){
        Cart::buyProduct($id);
        header('Location: \profile');
    }
}?>