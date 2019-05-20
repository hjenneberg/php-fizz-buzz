<?php

declare(strict_types=1);

namespace HJenneberg\FizzBuzz;

use Closure;
use HJenneberg\FizzBuzz\Parts\Buzz;
use HJenneberg\FizzBuzz\Parts\Fizz;

/**
 * Class FizzBuzzTwo
 */
final class FizzBuzzTwo implements FizzBuzzStaticInterface
{
    /**
     * @var Closure
     */
    private static $isDivisibleByFizz;
    /**
     * @var Closure
     */
    private static $isDivisibleByBuzz;

    /**
     * @param int $limit
     *
     * @return array
     */
    public static function get(int $limit): array
    {
        self::$isDivisibleByFizz = self::isDivisible(Fizz::divisor());
        self::$isDivisibleByBuzz = self::isDivisible(Buzz::divisor());

        $items = [];

        for ($i = 1; $i <= $limit; $i++) {
            $items[$i] = self::decideOn($i);
        }

        return $items;
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
        return (self::$isDivisibleByFizz)($i);
    }

    /**
     * @param int $i
     *
     * @return bool
     */
    private static function isBuzz(int $i): bool
    {
        return (self::$isDivisibleByBuzz)($i);
    }

    /**
     * @param int $by
     *
     * @return Closure
     */
    private static function isDivisible(int $by): Closure
    {
        return function ($i) use ($by) {
            return 0 === $i % $by;
        };
    }
}
