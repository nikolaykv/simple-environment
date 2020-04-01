<?php

// Данные для соединения с базой чере PDO
return [
            'host'     => 'db',     // В docker-compose для image = mysql:5.7 установленное данное имя для хоста баз данных
            'dbname'   => 'nk-db',
            'charset'  => 'utf8',
            'user'     => 'nkroot',
            'password' => 'admin',
        ];