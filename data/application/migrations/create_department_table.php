<?php

require "../libs/bootstrap.php";
use Illuminate\Database\Capsule\Manager as Capsule;
use Illuminate\Database\Schema\Blueprint;


Capsule::schema()->create('department', function (Blueprint $table) {
    $table->increments('id')->comment('Идентификатор департамента');
    $table->string('name', 100)->comment('Название департамента');
    $table->engine = 'InnoDB';
    $table->charset = 'utf8';
});

Capsule::connection()->update('ALTER TABLE department AUTO_INCREMENT=3;');