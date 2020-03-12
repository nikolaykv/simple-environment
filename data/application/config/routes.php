<?php

/**
 * Файл с маршрутами
 */

return [
    '' => [
        'controller' => 'main',
        'action' => 'index'
    ],
    'task-for-array/one-task' => [
        'controller' => 'taskForArray',
        'action' => 'oneTask'
    ],

    'task-for-database-tables/two-task' => [
        'controller' => 'taskForDatabaseTables',
        'action' => 'twoTask'
    ]
];