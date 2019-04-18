<?php

declare(strict_types=1);

# you may not require this line if you are using some kind of auto loader
use HJenneberg\FizzBuzz\FizzBuzzOne;

require_once __DIR__ . '/../vendor/autoload.php';

foreach(FizzBuzzOne::get(100) as $turn) {
    echo $turn . ' - ';
}
echo PHP_EOL;
