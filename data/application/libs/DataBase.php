<?php

namespace application\libs;

use PDO;
use PDOException;

class DataBase
{
    protected $connection;

    public function __construct()
    {
        $config = require 'application/config/config-database-connection.php';

        try {
            $this->connection = new PDO(
                'mysql:host=' . $config['host'] . ';
                dbname=' . $config['dbname'] . ';
                charset=' . $config['charset'],
                $config['user'],
                $config['password']
            );
        } catch (PDOException $e) {
            print 'Ошибка подключения к базе: <b>' . $e->getMessage() . '</b>';
            die();
        }
    }
}