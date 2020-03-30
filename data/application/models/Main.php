<?php

namespace application\models;

use application\core\Model;

class Main extends Model
{
    public function getAllNameAndIdCategory()
    {
        $sql = $this->dataBase->row('SELECT * FROM category_description ORDER BY category_id ASC LIMIT 4 ');
        return $sql;
    }

    public function liveReloadCategory($startFrom)
    {
        $sql = $this->dataBase->row('SELECT * FROM category_description ORDER BY category_id ASC LIMIT ' . $startFrom . ', 4');

        foreach ($sql as $item) {
            $result[] = array(
                'category_id' => $item['category_id'],
                'name' => $item['name'],
                'description' => strip_tags(html_entity_decode($item['description'])),
            );
        }
        echo json_encode($result);
    }
}