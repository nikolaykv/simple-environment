<?php

namespace application\core;
use application\libs\DataBase;
abstract class Model
{
    public $dataBase;

    public function __construct()
    {
        $this->dataBase = new DataBase();
    }

}