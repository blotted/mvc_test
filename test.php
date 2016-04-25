<?php
use Application\Collection;

require __DIR__ . '/autoload.php';

$a = new Collection();

$a[] = 1;
$a[1] = 22;
$a[2] = 43;

foreach ($a as $item) {
    echo $item;
}