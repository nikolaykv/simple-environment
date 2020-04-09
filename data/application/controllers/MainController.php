<?php

namespace application\controllers;
use application\core\Controller;
use application\core\View;
use application\models\Main;
use application\core\Cookie;

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

        // pattern singleton class Cookie
        $cookie = Cookie::instance();

        // Можно изменить время жизни cookie (по умолчанию 1 год)
        $cookie->setCookie('TEST', 'testValue', 3600);

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