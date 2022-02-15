<?php

require_once __DIR__ . '/vendor/autoload.php';

use BelajarPhpComposer\Data\People;

$people = new People("Idad");

echo $people->sayHello("Budi").PHP_EOL;