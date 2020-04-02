<?php

namespace application\controllers;

use application\core\Controller;
use application\core\View;


class TaskController extends Controller
{

    public function workerAction()
    {
        $this->viewData->pathForView = 'task/worker';
        $this->viewData->renderViews('Страница для вывода сотрудников');
    }

    public function departmentAction()
    {
        $this->viewData->pathForView = 'task/department';
        $this->viewData->renderViews('Страница для вывода сотрудников по отделу');
    }

    /**
     * Отдаст страницу для задачи по телефонному справочнику
     */
    public function phoneDirectoryAction()
    {
        $this->viewData->pathForView = 'task/phone-directory';
        $this->viewData->renderViews('Страница телефонной книги');
    }
}