<?php

require "../libs/bootstrap.php";
use Illuminate\Database\Capsule\Manager as Capsule;
use Illuminate\Database\Schema\Blueprint;

Capsule::schema()->create('link_phone_and_address_data', function (Blueprint $table) {
    $table->primary(['address_data_id', 'phone_id']);
    $table->unsignedInteger('address_data_id')->comment('Внешний ключ, сылается на id таблицы address_data');
    $table->unsignedInteger('phone_id')->comment('Внешний ключ, сылается на id таблицы address_data');
    $table->foreign('address_data_id')->references('id')->on('address_data')->onDelete('cascade');
    $table->foreign('phone_id')->references('id')->on('phone')->onDelete('cascade');
    $table->engine = 'InnoDB';
    $table->charset = 'utf8';
});