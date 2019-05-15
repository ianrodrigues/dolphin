<?php

require __DIR__ . '/vendor/autoload.php';

use Dolphin\Dolphin;
use Dolphin\Config;

$config = new Config(require __DIR__ . '/config.php');
$dolphin = new Dolphin($config);

$dolphin->buildInventory();

echo $dolphin->getInventory()->output();


