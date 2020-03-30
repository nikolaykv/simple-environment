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
    public function indexAction()
    {
        // Запрос
        $result = $this->model->getAllNameAndIdCategory();

        // Сформировать массив результатов
        $vars = [
          'categories' => $result
        ];

        // Отдать данные в шаблон
        $this->viewData->renderViews(
            'Главная страница',
            $vars)
        ;
    }

    /**
     * Отдаст страницу для задачи по телефонному справочнику
     */
    public function telephoneDirectoryAction()
    {
        $this->viewData->pathForView = 'main/telephone-directory';
        $this->viewData->renderViews('Страница для задачи по телефонному справочнику');
    }

    /**
     * Перенаправит на adminer
     */
    public function adminerAction()
    {
        $this->viewData->redirect('http://' . $_SERVER['SERVER_NAME'] . ':8080');
    }
}