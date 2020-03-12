<?php

namespace application\core;
/**
 * Class Router
 * @package application\core
 */
class Router
{
    /**
     * @var array
     */
    protected $routes = [];
    /**
     * @var array
     */
    protected $params = [];

    /**
     * Router constructor.
     */
    function __construct()
    {
        $routesArrays = require_once 'application/config/routes.php';

        foreach ($routesArrays as $key => $val) {
            $this->addRoute($key, $val);
        }
    }

    /**
     * @param $route
     * @param $parameters
     *
     * Создаст регулярные выражения из маршрута и добавит его
     */
    public function addRoute($route, $parameters)
    {
        // Подготовим маршруты для обработки checkRoute()
        $regularExpression = '#^' . $route . '$#';

        // Ключи это регулярные выражения
        $this->routes[$regularExpression] = $parameters;
    }

    /**
     * @return bool
     *
     * Получит url и проверит есть ли такой маршрут
     */
    public function checkRoute()
    {
        $url = trim($_SERVER['REQUEST_URI'], '/');

        // Перебрать массив с роутами и через регулярку проверить на соовтествие в url
        foreach ($this->routes as $regularExpression => $parameters) {
            if (preg_match($regularExpression, $url, $matches)) {
                // здесь массив с controller и action
                $this->params = $parameters;
                // если соовтествие найдено
                return true;
            }
        }
        // если соовтествия не найдено
        return false;
    }

    /**
     * Запустит нужный controller по пришедшему маршруту
     */
    public function runRoute()
    {
        // Если есть такой роут
        if ($this->checkRoute()) {
            // Путь до запускаемого контролера
            $controller = 'application\controllers\\' . ucfirst($this->params['controller']) . 'Controller.php';

            // Проверим существование данного класса и подключим его
            if (class_exists($controller)) {
                echo 'Окей';
            } else {
                echo 'Данный <b>' . $controller . '</b> не существует!!!';
            }
        } else {
            echo '<h1 style="text-align: center; margin-top: 50px; font-size: 1em; color: red;">404 CODE</h1>';
        }
    }
}