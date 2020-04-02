<?php

/**
 * Файл с маршрутами
 */

return [
    '' => [
        'controller' => 'main',
        'action' => 'index',
    ],
    'adminer' => [
        'controller' => 'main',
        'action' => 'adminer'
    ],

    'task/worker' => [
        'controller' => 'task',
        'action' => 'worker'
    ],
    'task/department' => [
        'controller' => 'task',
        'action' => 'department'
    ],
    'task/phone-directory' => [
        'controller' => 'task',
        'action' => 'phoneDirectory'
    ],

    'api/index' => [
        'controller' => 'api',
        'action' => 'index'
    ],
    'api/get-ajax-category-by-id' => [
        'controller' => 'api',
        'action' => 'getAjaxCategoryById'
    ],
];