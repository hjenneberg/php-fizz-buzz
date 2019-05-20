<?php

declare(strict_types=1);

namespace HJenneberg\FizzBuzz;

use HJenneberg\FizzBuzz\Parts\Buzz;
use HJenneberg\FizzBuzz\Parts\Fizz;
use HJenneberg\FizzBuzz\Parts\FizzBuzz;

/**
 * Class DecideTrait
 */
trait DecideTrait
{
    /**
     * @param int $i
     *
     * @return string|int
     */
    private static function decide(int $i)
    {
        if (FizzBuzz::is($i)) {
            return FizzBuzz::title();
        }
        if (Buzz::is($i)) {
            return Buzz::title();
        }
        if (Fizz::is($i)) {
            return Fizz::title();
        }

        return $i;
    }
}
