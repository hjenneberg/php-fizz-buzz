<?php

declare(strict_types=1);

use HJenneberg\FizzBuzz\FizzBuzzOne;
use HJenneberg\FizzBuzz\FizzBuzzTwo;
use PhpBench\Benchmark\Metadata\Annotations\Iterations;
use PhpBench\Benchmark\Metadata\Annotations\Revs;

/**
 * Class FizzBuzzBench
 *
 * @Revs(1000)
 * @Iterations(5)
 */
final class FizzBuzzBench
{
    const FIZZ_UP_TO = 1000;

    public function benchOne()
    {
        FizzBuzzOne::get(self::FIZZ_UP_TO);
    }

    public function benchTwo()
    {
        FizzBuzzTwo::get(self::FIZZ_UP_TO);
    }
}
