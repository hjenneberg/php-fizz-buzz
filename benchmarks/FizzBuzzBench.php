<?php

declare(strict_types=1);

use HJenneberg\FizzBuzz\FizzBuzzOne;
use PhpBench\Benchmark\Metadata\Annotations\Iterations;
use PhpBench\Benchmark\Metadata\Annotations\Revs;

/**
 * Class FizzBuzzBench
 */
class FizzBuzzBench
{
    /**
     * @Revs(1000)
     * @Iterations(5)
     */
    public function benchGet()
    {
        FizzBuzzOne::get(1000);
    }
}
