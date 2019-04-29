<?php

declare(strict_types=1);

use HJenneberg\FizzBuzz\FizzBuzzOne;
use HJenneberg\FizzBuzz\FizzBuzzOneCleaner;
use HJenneberg\FizzBuzz\FizzBuzzTwo;
use HJenneberg\FizzBuzz\FizzBuzzTwoCleaner;
use PhpBench\Benchmark\Metadata\Annotations\Iterations;
use PhpBench\Benchmark\Metadata\Annotations\Revs;

/**
 * Class FizzBuzzBench
 */
final class FizzBuzzBench
{
    const FIZZ_UP_TO = 1000;

    /**
     * @Revs(500)
     * @Iterations(3)
     */
    public function benchOne()
    {
        FizzBuzzOne::get(self::FIZZ_UP_TO);
    }

    /**
     * @Revs(500)
     * @Iterations(3)
     */
    public function benchOneCleaner()
    {
        FizzBuzzOneCleaner::get(self::FIZZ_UP_TO);
    }

    /**
     * @Revs(500)
     * @Iterations(3)
     */
    public function benchTwo()
    {
        FizzBuzzTwo::get(self::FIZZ_UP_TO);
    }

    /**
     * @Revs(500)
     * @Iterations(3)
     */
    public function benchTwoCleaner()
    {
        FizzBuzzTwoCleaner::get(self::FIZZ_UP_TO);
    }
}
