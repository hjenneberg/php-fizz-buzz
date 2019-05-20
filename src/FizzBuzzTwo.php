<?php

declare(strict_types=1);

namespace HJenneberg\FizzBuzz;

use Closure;
use HJenneberg\FizzBuzz\Parts\Buzz;
use HJenneberg\FizzBuzz\Parts\Fizz;

/**
 * Class FizzBuzzTwo
 */
class FizzBuzzTwo implements FizzBuzzStaticInterface
{
    /**
     * @var Closure
     */
    private static $isDividableByFizz;
    /**
     * @var Closure
     */
    private static $isDividableByBuzz;

    /**
     * @param int $limit
     *
     * @return array
     */
    public static function get(int $limit): array
    {
        self::$isDividableByFizz = self::isDividableBy(Fizz::divisor());
        self::$isDividableByBuzz = self::isDividableBy(Buzz::divisor());

        $items = [];

        for ($i = 1; $i <= $limit; $i++) {
            $items[$i] = self::decideOn($i);
        }

        return $items;
    }

    /**
     * @param int $by
     *
     * @return Closure
     */
    private static function isDividableBy(int $by): Closure
    {
        return function ($i) use ($by) {
            return 0 === $i % $by;
        };
    }

    /**
     * @param int $i
     *
     * @return string|int
     */
    private static function decideOn(int $i)
    {
        if (self::isFizz($i) && self::isBuzz($i)) {
            return Fizz::title() . Buzz::title();
        }
        if (self::isBuzz($i)) {
            return Buzz::title();
        }
        if (self::isFizz($i)) {
            return Fizz::title();
        }

        return $i;
    }

    /**
     * @param int $i
     *
     * @return bool
     */
    private static function isFizz(int $i): bool
    {
        return (self::$isDividableByFizz)($i);
    }

    /**
     * @param int $i
     *
     * @return bool
     */
    private static function isBuzz(int $i): bool
    {
        return (self::$isDividableByBuzz)($i);
    }
}
