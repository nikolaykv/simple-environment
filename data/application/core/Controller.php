<?php

namespace application\core;

use application\core\View;

/**
 * Class Controller
 * @package application\core
 */
abstract class Controller
{
    /**
     * @var
     *
     * Данные маршрута
     */
    public $routesData;

    /**
     * @var \application\core\View
     *
     * Данные шаблона
     */
    public $viewData;

    /**
     * Controller constructor.
     * @param $allRoutes
     */
    public function __construct($allRoutes)
    {
        $this->routesData = $allRoutes;

        $this->viewData = new View($allRoutes);

        // Пример использования второго layout || Нужна проверка на существование такого метода
        // $this->otherLayout();
    }
}