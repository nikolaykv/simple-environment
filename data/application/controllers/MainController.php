<?php

namespace application\controllers;
use application\core\Controller;
use application\core\View;
use application\models\Main;

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
        foreach ($result as $item) {
            $vars['categories'][] = array(
              'category-id' => $item['category_id'],
              'name' => $item['name'],
              'description' => strip_tags(html_entity_decode($item['description'])),
            );
        }
        // Отдать данные в шаблон
        $this->viewData->renderViews('Главная страница', $vars);
    }
    /**
     * Перенаправит на adminer
     */
    public function adminerAction()
    {
        $this->viewData->redirect('http://' . $_SERVER['SERVER_NAME'] . ':8080');
    }

    /**
     *  Позволит подключить другой общий шаблон
     *  Можно использовать, например для админ панели
     */
     /*public function otherLayout()
    {
        $this->viewData->commonLayout = 'custom';
    }*/

}