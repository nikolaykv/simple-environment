<?php

namespace application\controllers;

use application\core\Controller;
use application\core\View;

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
        $this->viewData->renderViews('Главная страница');
    }

    /**
     * Отдаст страницу для задачи по телефонному справочнику
     */
    public function telephoneDirectoryAction() {
        $this->viewData->pathForView = 'main/telephone-directory';
        $this->viewData->renderViews('Страница для задачи по телефонному справочнику');
    }
}