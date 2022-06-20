<?php

class ErrorController{

    public function actionIndex(){
        require_once(ROOT .'/views/errors/404.php');
    }
}
?>