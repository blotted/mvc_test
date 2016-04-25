<?php

/**
 * Application\Models\User => ./Application/Models/User.php
 */
/*
function __autoload($class)
{
    require __DIR__ . '/' . str_replace('\\', '/', $class) . '.php';
}
*/

spl_autoload_register(function ($class) {
    $filename = __DIR__ . '/' . str_replace('\\', '/', $class) . '.php';

    if (file_exists($filename)) {
        include $filename;
    }
});