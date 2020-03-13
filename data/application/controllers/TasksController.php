<?php

namespace application\controllers;

use application\core\Controller;
use application\core\View;

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
        $this->viewData->pathForView = 'tasks/one-task';
        $this->viewData->renderViews('Страница первого таска');
    }

    /**
     * Второй таск || Маршрут tasks/two-task
     */
    public function twoTaskAction()
    {
        $this->viewData->pathForView = 'tasks/two-task';
        $this->viewData->renderViews('Страница второго таска');
    }

    /**
     *  Позволит подключить другой общий шаблон
     *  Можно использовать, например для админ панели
     */
    /* public function otherLayout()
    {
        $this->viewData->commonLayout = 'custom';
    }*/
}