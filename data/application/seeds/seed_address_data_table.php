<?php

require "../libs/bootstrap.php";
use \Faker\Factory;
use Illuminate\Database\Capsule\Manager as Capsule;

$faker = Factory::create('ru_RU');

    for ($i = 0; $i < 30; $i++) {
        $addressData = $faker->unique()->name();
        Capsule::table('address_data')->insert([
            'user_name' => $faker->unique()->name(),
        ]);
    }
