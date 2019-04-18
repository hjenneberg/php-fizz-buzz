<?php

declare(strict_types=1);

use HJenneberg\FizzBuzz\FizzBuzzOne;
use HJenneberg\FizzBuzz\FizzBuzzOneBetter;
use PhpBench\Benchmark\Metadata\Annotations\Iterations;
use PhpBench\Benchmark\Metadata\Annotations\Revs;

/**
 * Class FizzBuzzBench
 */
class FizzBuzzBench
{
    /**
     * @Revs(1000)
     * @Iterations(10)
     */
    public function benchOne()
    {
        FizzBuzzOne::get(10000);
    }
    /**
     * @Revs(1000)
     * @Iterations(10)
     */
    public function benchOneBetter()
    {
        FizzBuzzOneBetter::get(10000);
    }
}
