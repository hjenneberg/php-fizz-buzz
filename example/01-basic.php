<?php

declare(strict_types=1);

# you may not require this line if you are using some kind of auto loader
use HJenneberg\FizzBuzz\FizzBuzz;

require_once __DIR__ . '/../vendor/autoload.php';

foreach(FizzBuzz::get(100) as $turn) {
    echo $turn . ' - ';
}

