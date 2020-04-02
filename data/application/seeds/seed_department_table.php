<?php

require "../libs/bootstrap.php";
use \Faker\Factory;
use Illuminate\Database\Capsule\Manager as Capsule;

$faker = Factory::create('ru_RU');

for ($i = 0; $i < 50; $i++) {

    Capsule::table('department')->insert([
       'name' => $faker->unique()->company(),
    ]);
}