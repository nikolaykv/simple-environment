<?php

namespace application\models;

use application\core\Model;

class Main extends Model
{
    public function getAllNameAndIdCategory()
    {
        $sql = $this->dataBase->row('SELECT * FROM category_description ORDER BY category_id ASC LIMIT 3');
        return $sql;
    }
}