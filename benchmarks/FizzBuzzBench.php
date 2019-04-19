<?php

declare(strict_types=1);

use HJenneberg\FizzBuzz\FizzBuzzOne;
use HJenneberg\FizzBuzz\FizzBuzzOneCleaner;
use PhpBench\Benchmark\Metadata\Annotations\Iterations;
use PhpBench\Benchmark\Metadata\Annotations\Revs;

/**
 * Class FizzBuzzBench
 */
class FizzBuzzBench
{
    /**
     * @Revs(100)
     * @Iterations(2)
     */
    public function benchOne()
    {
        FizzBuzzOne::get(1000);
    }
    /**
     * @Revs(100)
     * @Iterations(2)
     */
    public function benchOneBetter()
    {
        FizzBuzzOneCleaner::get(1000);
    }
}
