<?php

namespace application\core;

/**
 * Class View
 * @package application\core
 */
class View
{
    /**
     * @var string
     *
     * Путь к шаблону
     */
    public $pathForView;

    /**
     * @var string
     *
     * header и footer по дефолту || общий шаблон
     */
    public $commonLayout = 'default';

    /**
     * @var
     *
     * сюда занесём массив с данными маршрутов
     */
    public $routes;

    /**
     * View constructor.
     * @param $allRoutes
     */
    public function __construct($allRoutes)
    {
        // Массив с данными маршрутов
        $this->routes = $allRoutes;

        // Путь к шаблону предстваления
        $this->pathForView = $allRoutes['controller'] . '/' . $allRoutes['action'];
    }

    /**
     * @param $title
     * @param array $vars
     *
     * Отдаст шаблоны страниц
     */
    public function renderViews($title, $vars = [])
    {
        // Распаковать ключи и значения массива в переменную
        extract($vars);
        $pathViews = 'application/views/' . $this->pathForView . '.php';
        if (file_exists($pathViews)) {
            ob_start();
            require $pathViews;
            $content = ob_get_clean();
            require 'application/views/layouts/' . $this->commonLayout . '.php';
        } else {
            $this::errorCode(500);
        }
    }

    /**
     * @param $url
     */
    public function redirect($url)
    {
        header('Location: ' . $url);
        exit;
    }

    /**
     * @param $code
     *
     * отдаст страницы ошибок
     */
    public static function errorCode($code)
    {
        http_response_code($code);
        $errorPathPage = 'application/views/errors/' . $code . '.php';

        if (file_exists($errorPathPage)) {
            require $errorPathPage;
        }
        exit;
    }
}