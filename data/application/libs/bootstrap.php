<?php

// Массив с данными для подключения к БД
$config = require '../config/config-database-connection.php';

// Composer autoload
require "../../vendor/autoload.php";

use Illuminate\Database\Capsule\Manager as Capsule;

$capsule = new Capsule;

$capsule->addConnection([
    "driver" => "mysql",
    "host" =>$config["host"],
    "database" => $config["dbname"],
    "username" => $config["user"],
    "password" => $config["password"],
    'charset'   => $config["charset"],
    'collation' => 'utf8_general_ci',
    'prefix'    => '',
]);

// Сделать этот инстанс класса глобальным
$capsule->setAsGlobal ();
