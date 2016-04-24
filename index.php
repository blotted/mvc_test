<?php
require __DIR__ . '/autoload.php';


$view = new \Application\View();
$view->users = \Application\Models\User::findAll();

$view->display(__DIR__ . '/Application/templates/index.php');
