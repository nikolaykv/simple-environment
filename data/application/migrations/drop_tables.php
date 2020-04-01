<?php

require "../libs/bootstrap.php";
use Illuminate\Database\Capsule\Manager as Capsule;

Capsule::schema()->drop('worker');
Capsule::schema()->drop('department');