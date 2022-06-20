<?php

class Profile
{

    public static function getOrderHistory()
    {   
        $ordersList = array();
        $idvk = 139061591;
        $result = R::findAll('orderhistory',"idvk = $idvk ORDER BY id DESC");
        $count = R::count('orderhistory',"idvk = $idvk");

        $i = 0;
        foreach($result as $orders){
            $ordersList[$i]['id'] = $orders['id'];
            $ordersList[$i]['nick'] = $orders['nick'];
            $ordersList[$i]['date'] = $orders['date'];
            $ordersList[$i]['operation'] = $orders['operation'];
            $ordersList[$i]['sum'] = $orders['sum'];
            $ordersList[$i]['status'] = $orders['status'];
            $ordersList[$i]['info'] = $orders['info'];
            $ordersList[$i]['idvk'] = $orders['idvk'];
            $ordersList[$i]['count'] = $count;
            $i++;
        }

        return $ordersList;
    }

}?>