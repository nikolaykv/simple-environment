<?php

require "../libs/bootstrap.php";
use Illuminate\Database\Capsule\Manager as Capsule;
use Illuminate\Database\Schema\Blueprint;

Capsule::schema()->create('category_description', function (Blueprint $table) {
    $table->integer('category_id')->autoIncrement()->comment('Идентификатор категории');
    $table->string('name', 255)->index()->comment('Имя категории');
    $table->text('description')->comment('Описание категории');
    $table->engine = 'InnoDB';
    $table->charset = 'utf8';
});