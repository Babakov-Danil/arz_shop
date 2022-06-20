<?php

include_once ROOT . '/models/Skins.php';

class SkinsController{

    public function actionIndex(){
        
        $skins = array();
        $skins = Skins::getSkinsList();

        require_once(ROOT . '/views/skins/index.php');

        return true;
    }
}?>