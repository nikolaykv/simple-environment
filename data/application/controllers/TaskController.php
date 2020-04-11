<?php

namespace application\controllers;

use application\core\Controller;
use application\core\View;
use Faker\Provider\PhoneNumber;


/**
 * Class TaskController
 * @package application\controllers
 */
class TaskController extends Controller
{

    /**
     * Вернет названия отдела и id сотрудников отдела
     */
    public function workerAction()
    {
        $this->viewData->pathForView = 'task/worker';
        $workers = $this->model->getIdOfDepartmnetWorkers();

        // Рассортировать массив в соотвествии с задачей
        $i = 0;
        while ($i < count($workers)) {
            switch ($workers[$i]['department_id']) {
                case $workers[$i]['department_id']:
                    $vars[$workers[$i]['name']][] = $workers[$i]['worker_id'];
                    break;
            }
            $i++;
        }

       $this->viewData->renderViews('Страница для вывода идентификаторов сотрудников по отделу', $vars);
    }

    /**
     * Вернёт названия отделов, в которых
     * пять и более сотрудников
     */
    public function departmentAction()
    {
        $this->viewData->pathForView = 'task/department';
        $department = $this->model->getDepartmentName();

        foreach ($department as $item) {
            $vars[] = array(
                'name' => $item['name'],
                'count-workers' => $item['count_workers']
            );
        }
        $this->viewData->renderViews('Страница для вывода сотрудников по отделу', $vars);
    }

    /**
     * Отдаст страницу для задачи по телефонному справочнику
     */
    public function phoneDirectoryAction()
    {
        $this->viewData->pathForView = 'task/phone-directory';
        $this->viewData->renderViews('Страница телефонной книги');
    }

    /**
     * Простая регулярка на точное соотвествие пришедших из формы тегов
     */
    public function parseHtmlAction()
    {
        $this->viewData->pathForView = 'task/parse-html';

        if (!empty($_POST['validator'])) {
            $res = preg_match('#^<a><div></div></a><span></span>$#', $_POST['validator']);
            if ($res == true) {
                $vars = array(
                 'success' => 'Валидно в рамках задачи'
                );
            } else {
                $vars = array(
                 'unsuccess' => 'Не валидно в рамках задачи!!!'
                );
            }
        } else {
            $vars = array(
                'other' =>'Заполните и отправьте форму'
            );
        }

        $this->viewData->renderViews('Страница для валидации разметки', $vars);
    }
}
