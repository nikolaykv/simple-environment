<?php

// Дебаг
require 'application/libs/Dumper.php';

use application\core\Router;

/**
 * @param $class
 * Функция автозагрузчик классов
 */
spl_autoload_register(function ($class) {
    $pathForClass = str_replace('\\', '/', $class . '.php');

    if (file_exists($pathForClass)) {
        require $pathForClass;
    }
});

session_start();

// Инстанс маршрутизации
$router = new Router;

/**
 * Метод экземпляра запустит создание
 * нового инстанса пришедшего маршрута
 * и вызовет пришедший action
 */
$router->runRoute();

