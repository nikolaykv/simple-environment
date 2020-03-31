<?php

namespace application\controllers;
use application\core\Controller;

class ApiController extends Controller
{
    public function indexAction()
    {
        if (isset($_POST["start"])) {
            $start = $_POST["start"];
        } else {
            $this->viewData->redirect('/');
        }
        $this->model->liveReloadCategory($start);
    }
}