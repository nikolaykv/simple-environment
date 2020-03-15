<?php

/**
 * Файл с маршрутами
 */

return [
    '' => [
        'controller' => 'main',
        'action' => 'index'
    ],

    'tasks/one-task' => [
        'controller' => 'tasks',
        'action' => 'oneTask'
    ],
    'tasks/two-task' => [
        'controller' => 'tasks',
        'action' => 'twoTask'
    ],
    'telephone-directory' => [
        'controller' => 'main',
        'action' => 'telephoneDirectory'
    ],
    'adminer.php' => [
        'controller' => 'main',
        'action' => 'adminer'
    ],
];