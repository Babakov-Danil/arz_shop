<?php

class Balance
{

    public static function getBalance()
    {

        $balance = R::findOne('users', "idvk = 139061591");

        return $balance;
    }
}
?>