<?php

declare(strict_types=1);

use HJenneberg\FizzBuzz\FizzBuzzOne;
use HJenneberg\FizzBuzz\FizzBuzzOneCleaner;
use HJenneberg\FizzBuzz\FizzBuzzThreeB;
use HJenneberg\FizzBuzz\FizzBuzzThreeC;
use HJenneberg\FizzBuzz\FizzBuzzTwo;
use HJenneberg\FizzBuzz\FizzBuzzTwoA;
use HJenneberg\FizzBuzz\FizzBuzzTwoB;
use HJenneberg\FizzBuzz\FizzBuzzTwoC;
use HJenneberg\FizzBuzz\FizzBuzzTwoCleaner;
use HJenneberg\FizzBuzz\FizzBuzzTwoCleanest;
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

    public function benchOneCleaner()
    {
        FizzBuzzOneCleaner::get(self::FIZZ_UP_TO);
    }

    public function benchTwo()
    {
        FizzBuzzTwo::get(self::FIZZ_UP_TO);
    }

    public function benchTwoA()
    {
        FizzBuzzTwoA::get(self::FIZZ_UP_TO);
    }

    public function benchTwoB()
    {
        FizzBuzzTwoB::get(self::FIZZ_UP_TO);
    }

    public function benchTwoC()
    {
        FizzBuzzTwoC::get(self::FIZZ_UP_TO);
    }

    public function benchTwoCleaner()
    {
        FizzBuzzTwoCleaner::get(self::FIZZ_UP_TO);
    }

    public function benchTwoCleanest()
    {
        FizzBuzzTwoCleanest::get(self::FIZZ_UP_TO);
    }

    public function benchThreeB()
    {
        (new FizzBuzzThreeB)->get(self::FIZZ_UP_TO);
    }

    public function benchThreeC()
    {
        (new FizzBuzzThreeC)->get(self::FIZZ_UP_TO);
    }
}
