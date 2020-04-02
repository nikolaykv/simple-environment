<?php

namespace application\controllers;
use application\core\Controller;

/**
 * Class ApiController
 * @package application\controllers
 */
class ApiController extends Controller
{
    /**
     * Для ajax запроса категорий на домащней странице
     * в таблицу
     */
    public function indexAction()
    {
        if (isset($_POST["start"])) {
            $start = $_POST["start"];
        } else {
            $this->viewData->redirect('/');
        }
        $this->model->liveReloadCategory($start);
    }

    /**
     * ajax выборка категории по id
     */
    public function getAjaxCategoryByIdAction()
    {
        if (!isset($_POST["category"])) {
            $this->viewData->redirect('/');
        }
        $this->model->getCategoryById($_POST['category']);
    }

    /*public function addDummyDataAction()
    {
        echo 'TEST';
    }*/
}