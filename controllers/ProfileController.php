<?php
include_once ROOT . '/models/OrderHistory.php';
class ProfileController
{

    public function actionIndex()
    {
        // Получаем идентификатор пользователя из сессии
        //$userId = User::checkLogged();
        
        // Получаем информацию о пользователе из БД
        //$user = User::getUserById($userId);
        $orderHistoryList = array();
        $orderHistoryList = Profile::getOrderHistory();
        
        require_once(ROOT . '/views/profile/index.php');

        return true;
    }  

}?>