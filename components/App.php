<?php

class App
{

        public static function start()
        {
            self::libs();
            self::db();
        }
    
        public static function libs()
        {
            $config = require_once "config/app.php"; 
            foreach ($config["libs"] as $lib) {
                require_once "libs/" . $lib . ".php";
            }
        }

    public static function db()
    {
        $params = require_once('./config/db_params.php');

        R::setup( 'mysql:host=' . $params["host"] . ';dbname=' . $params["dbname"],
            $params["user"], $params["password"]);   

        if (!\R::testConnection()) {
            die('Error datebase');
        }
    }

}
?>