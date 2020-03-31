<?php

namespace application\models;

use application\core\Model;

/**
 * Class Api
 * @package application\models
 */
class Api extends Model {
    /**
     * @param $startFrom
     */
    public function liveReloadCategory($startFrom)
    {
        $sql = $this->dataBase->row('SELECT * FROM category_description ORDER BY category_id ASC LIMIT ' . $startFrom . ', 3');

        foreach ($sql as $item) {
            $result[] = array(
                'category_id' => $item['category_id'],
                'name' => $item['name'],
                'description' => strip_tags(html_entity_decode($item['description'])),
            );
        }
        echo json_encode($result,  JSON_UNESCAPED_UNICODE);
    }


    /**
     * @param $post
     */
    public function getCategoryById($post)
    {
        $sql = $this->dataBase->row('SELECT * FROM category_description WHERE category_id = ' . $_POST['category']);

        foreach ($sql as $item) {
            $result[] = array(
                'category_id' => $item['category_id'],
                'name' => $item['name'],
                'description' => strip_tags(html_entity_decode($item['description'])),
            );
        }
        if (empty($result)) {
            echo json_encode(['status' => 'not_found']);
        } else {
            echo json_encode($result,  JSON_UNESCAPED_UNICODE);
        }
    }
}