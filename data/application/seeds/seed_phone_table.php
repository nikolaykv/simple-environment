<?php

require "../libs/bootstrap.php";
use \Faker\Factory;
use Illuminate\Database\Capsule\Manager as Capsule;

$faker = Factory::create('ru_RU');

for ($i = 0; $i < 30; $i++) {

    Capsule::table('phone')->insert([
        'phone_number' => $faker->unique()->phoneNumber,
    ]);
}