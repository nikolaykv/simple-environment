<?php

namespace application\libs;

use PDO;
use PDOException;

/**
 * Class DataBase
 * @package application\libs
 */
class DataBase
{
    /**
     * @var PDO
     */
    protected $connection;

    /**
     * DataBase constructor.
     */
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

    /**
     * @param $sql
     * @return false|\PDOStatement
     */
    public function query($sql)
    {
        $query = $this->connection->query($sql);
        return $query;
    }

    /**
     * @param $sql
     * @return array
     */
    public function row($sql)
    {
        $result = $this->query($sql);
        return $result->fetchAll(PDO::FETCH_ASSOC);
    }

    /**
     * @param $sql
     * @return mixed
     */
    public function column($sql)
    {
        $result = $this->query($sql);
        return $result->fetchColumn();
    }
}