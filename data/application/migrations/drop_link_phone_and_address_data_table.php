<?php

require "../libs/bootstrap.php";
use Illuminate\Database\Capsule\Manager as Capsule;

Capsule::schema()->drop('link_phone_and_address_data');