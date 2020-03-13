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
            $pathController = 'application\controllers\\' . ucfirst($this->params['controller']) . 'Controller';

            // Проверим существование данного класса/контролера
            if (class_exists($pathController)) {

                // Получим имя метода контролера
                $action = $this->params['action'] . 'Action';

                // Если метод существует в контроллере
                if (method_exists($pathController, $action)) {

                    // Создать экземпляр класса/контролера || передать в базовый контроллер массив с данными машрута
                    $instance = new $pathController($this->params);
                    // И вызвать его action
                    $instance->$action();

                } else {
                   View::errorCode(404);
                }
            } else {
                View::errorCode(404);
            }
        } else {
            View::errorCode(404);
        }
    }
}