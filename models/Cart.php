<?php

class Cart
{

    public static function addProduct($id)
    {

        $id = intval($id);

        $_SESSION['cart'] = $id;
        $_SESSION['vkid'] = 139061591;
        header('Location: /cart');
    }

    public static function getProduct()
    {
        print_r($_SESSION['cart']);
        $product = R::findOne('skins', "id_product = $_SESSION[cart]");

        return $product;
    }

    public static function buyProduct($id)
    {
        $id = intval($id);
        $product = R::findOne('skins', "id_product = $id");
        $balance = R::findOne('users', "idvk = $_SESSION[vkid]");
        //print_r($balance);
        if ($product['price'] > $balance['balance']) {
            require_once(ROOT . '/views\errors\balance.php');
        } else {
            if ($id <= 311) {
                $history = R::dispense('orderhistory');

                $history->nick = strval($_POST['nick']);
                $history->date = date('Y-m-d');
                $history->operation = 'Покупка скина';
                $history->sum = intval($product['price']);
                $history->status = 'Платеж выполнен';
                $history->info = 'В обработке';
                $history->idvk = intval($_SESSION['vkid']);

                R::store($history);

                $balance->balance = $balance['balance'] - $product['price'];

                R::store($balance);
            }
        }
    }
}
?>