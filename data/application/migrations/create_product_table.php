<?php

require "../libs/bootstrap.php";
use Illuminate\Database\Capsule\Manager as Capsule;
use Illuminate\Database\Schema\Blueprint;

Capsule::schema()->create('product', function (Blueprint $table) {
    $table->integer('product_id')->autoIncrement()->index()->comment('Идентификатор продукта');
    $table->string('name', 64)->comment('Модель продукта');
    $table->decimal('price', 15, 4)->comment('Цена продукта');
    $table->engine = 'InnoDB';
    $table->charset = 'utf8';
});