<?php
	// FRONT CONTROLLER

	// Общие настройки

	session_start();


	// Подключение файлов системы
	define('ROOT', dirname(__FILE__));
	require_once(ROOT . '/components/Router.php');

	// Подключение библиотеки
	require_once(ROOT . '/components/App.php');
	App::start();


	// Вызов Router
	$router = new Router();
	$router->run();
?>