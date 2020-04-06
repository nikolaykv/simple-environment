<?php

require "../libs/bootstrap.php";
use \Faker\Factory;
use Illuminate\Database\Capsule\Manager as Capsule;

$faker = Factory::create('ru_RU');

    for ($i = 0; $i < 20; $i++) {
        $addressData = $faker->unique()->name();
        $seed = explode(" ", $addressData);
        Capsule::table('address_data')->insert([
            'firstname' => $seed[0],
            'lastname' => $seed[1],
            'middlename' => $seed[2],
        ]);
    }
