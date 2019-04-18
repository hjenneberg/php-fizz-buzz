<?php

declare(strict_types=1);

use HJenneberg\FizzBuzz\FizzBuzz;
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
        FizzBuzz::get(1000);
    }
}
