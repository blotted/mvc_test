<?php

require __DIR__ . '/autoload.php';

$url = $_SERVER['REQUEST_URI'];

$controller = new \Application\Controllers\News();

$action = isset($_GET['action']) ? $_GET['action'] : 'Index';

try {
    $controller->action($action);
} catch(\Application\Exceptions\Core $e) {
    echo "An exception application: " . $e->getMessage();
} catch(\Application\Exceptions\Db $e) {
    echo "Database exception: " . $e->getMessage();
}
