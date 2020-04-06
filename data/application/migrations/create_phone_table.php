<?php

require "../libs/bootstrap.php";
use Illuminate\Database\Capsule\Manager as Capsule;
use Illuminate\Database\Schema\Blueprint;

Capsule::schema()->create('phone', function (Blueprint $table) {
    $table->increments('id')->comment('Идентификатор телефона');
    $table->string('phone_number', 100)->comment('Номер телефона');
    $table->engine = 'InnoDB';
    $table->charset = 'utf8';
});