<?php

namespace application\controllers;

use application\core\Controller;
/**
 * Class TasksController
 * @package application\controllers
 */
class TasksController extends Controller
{
    /**
     * Первый таск || Маршрут tasks/one-task
     */
    public function oneTaskAction()
    {
        echo 'Первый таск';

        echo '<pre>';
        var_dump($this->routesData);
        echo '</pre>';
    }

    /**
     * Второй таск || Маршрут tasks/two-task
     */
    public function twoTaskAction()
    {
        echo 'Второй таск';

        echo '<pre>';
        var_dump($this->routesData);
        echo '</pre>';
    }
}