<?php

require "../libs/bootstrap.php";
use \Faker\Factory;
use Illuminate\Database\Capsule\Manager as Capsule;

$faker = Factory::create('ru_RU');

for ($i = 0; $i < 50; $i++) {
    $worker = $faker->unique()->name();

    $seed = explode(" ", $worker);

    Capsule::table('worker')->insert([
        'firstname' => $seed[0],
        'lastname' => $seed[1],
        'middlename' => $seed[2],
        'department_id' => $faker->unique()->numberBetween(1, 100),
    ]);
}