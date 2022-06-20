<?php

class Skins{

    public static function getSkinsList(){
        
        $skinsList = array();
        $result = R::findAll('skins');

        $i = 0;
        foreach($result as $skins){
            $skinsList[$i]['id'] = $skins['id_product'];
            $skinsList[$i]['price'] = $skins['price'];
            $i++;
        }
        return $skinsList;
    }
}?>