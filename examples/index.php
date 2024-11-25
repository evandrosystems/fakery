<?php

require_once __DIR__ . '/../vendor/autoload.php';

use Fakery\Fakery;

$fakery = new Fakery();

echo $fakery->name() . PHP_EOL;