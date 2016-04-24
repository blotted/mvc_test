<?php

require __DIR__ . '/autoload.php';

$user = \Application\Models\User::findAll();

var_dump($user);