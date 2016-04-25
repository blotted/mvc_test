<?php

namespace Application\Controllers;


use Application\Exceptions\Core;
use Application\Models\Author;
use Application\MultiException;
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
       // $e = new Core('Exception message');
       // throw $e;
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

    protected function actionCreate()
    {
        try {
           $article = new \Application\Models\News();
           $article->fill([]);
           $article->save();
        } catch(MultiException $e) {
           $this->view->errors = $e;
        }
        $this->view->display(__DIR__ . '/../templates/create.php');
    }
}