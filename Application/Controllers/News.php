<?php

namespace Application\Controllers;


use Application\View;

class News
{
    protected $view;

    public function __construct()
    {
        $this->view = new View();
    }

    public function action($action)
    {
        $methodName = 'action' . $action;
        $this->beforeAction();
        return $this->$methodName();
    }

    protected function beforeAction()
    {
    }

    protected function actionIndex()
    {

        $this->view->news = \Application\Models\News::findAll();

        $this->view->display(__DIR__ . '/../templates/index.php');
    }

    protected function actionPage()
    {
        $id = (int) $_GET['id'];
        $this->view->article = \Application\Models\News::findById($id);

        $this->view->display(__DIR__ . '/../templates/page.php');
    }
}