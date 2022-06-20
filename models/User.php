<?php

class User
{

    public static function auth($vkid)
    {
        $_SESSION['vkid'] = $vkid;
    }

    public static function checkLogged()
    {
        // Если сессия есть, вернем идентификатор пользователя
        if (isset($_SESSION['vkid'])) {
            return $_SESSION['vkid'];
        }

        header("Location: /user/login");
    }

    public static function isGuest()
    {
        if (isset($_SESSION['vkid'])) {
            return false;
        }
        return true;
    }

    /**
     * Проверяет имя: не меньше, чем 2 символа
     */
    public static function checkName($name)
    {
        if (strlen($name) >= 2) {
            return true;
        }
        return false;
    }

}
?>