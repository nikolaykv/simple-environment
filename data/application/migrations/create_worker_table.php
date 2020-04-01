<?php

require "../libs/bootstrap.php";
use Illuminate\Database\Capsule\Manager as Capsule;
use Illuminate\Database\Schema\Blueprint;

// Сама миграция
Capsule::schema()->create('worker', function (Blueprint $table) {
    $table->increments('id')->comment('Идентификатор сотрудника');
    $table->string('firstname', 100)->comment('Имя сотрудника');
    $table->string('lastname', 100)->comment('Фамилия сотрудника');
    $table->string('middlename', 100)->comment('Отчество сотрудника');
    $table->integer('departament_id')->comment('Идентификатор департамента');
    $table->engine = 'InnoDB';
    $table->charset = 'utf8';
});

// Запрос на AUTO_INCREMENT=3
Capsule::connection()->update('ALTER TABLE worker AUTO_INCREMENT=3;');