<?php

namespace application\controllers;

use application\core\Controller;

/**
 * Class MainController
 * @package application\controllers
 */
class MainController extends Controller
{
    /**
     * Отдаст главную страницу
     */
    public function indexAction() {
        echo 'Главная страница';

        echo '<pre>';
        var_dump($this->routesData);
        echo '</pre>';
    }

    public function telephoneDirectoryAction() {
        echo 'Задача с телефонным справочником';

        echo '<pre>';
        var_dump($this->routesData);
        echo '</pre>';
    }
}