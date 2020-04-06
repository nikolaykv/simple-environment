<?php

require "../libs/bootstrap.php";
use Illuminate\Database\Capsule\Manager as Capsule;
use Illuminate\Database\Schema\Blueprint;

Capsule::schema()->create('address_data', function (Blueprint $table) {
    $table->increments('id')->comment('Идентификатор адресата');
    $table->string('firstname', 100)->comment('Имя адресата');
    $table->string('lastname', 100)->comment('Фамилия адресата');
    $table->string('middlename', 100)->comment('Отчество адресата');
    $table->engine = 'InnoDB';
    $table->charset = 'utf8';
});