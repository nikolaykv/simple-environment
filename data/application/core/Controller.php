<?php

namespace application\core;
/**
 * Class Controller
 * @package application\core
 */
abstract class Controller
{
    /**
     * @var
     *
     * Пустая переменная для данных маршрута
     */
    public $routesData;

    /**
     * Controller constructor.
     * @param $allRoutes
     */
    public function __construct($allRoutes)
    {
        $this->routesData = $allRoutes;
    }
}