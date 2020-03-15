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
     * Данные маршрута
     */
    public $routesData;

    public $model;

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

        $this->model = $this->loadModel($allRoutes['controller']);
    }

    /**
     * @param $name
     * @return mixed
     */
    public function loadModel($name)
    {
        $pathForModel = 'application\models\\' . ucfirst($name);

        if (class_exists($pathForModel))
        {
            return new $pathForModel();
        } else {
            View::errorCode(500);
        }
    }
}