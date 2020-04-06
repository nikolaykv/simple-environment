<?php

require "../libs/bootstrap.php";
use Illuminate\Database\Capsule\Manager as Capsule;
use Illuminate\Database\Schema\Blueprint;

Capsule::schema()->create('address_data', function (Blueprint $table) {
    $table->increments('id')->comment('Идентификатор адресата');
    $table->string('user_name', 100)->comment('ФИО адресата');
    $table->engine = 'InnoDB';
    $table->charset = 'utf8';
});