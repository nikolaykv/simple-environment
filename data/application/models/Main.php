<?php

namespace application\models;

use application\core\Model;

class Main extends Model
{
    public function getAllNameAndIdCategory() {
        $sql = $this->dataBase->row('SELECT category_id, name FROM category_description');
        return $sql;
    }
}