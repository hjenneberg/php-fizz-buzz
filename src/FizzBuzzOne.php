<?php

declare(strict_types=1);

namespace HJenneberg\FizzBuzz;

use Closure;
use HJenneberg\FizzBuzz\Parts\Buzz;
use HJenneberg\FizzBuzz\Parts\Fizz;

/**
 * Class FizzBuzzOne
 */
final class FizzBuzzOne implements FizzBuzzStaticInterface
{
    /**
     * @param int $limit
     *
     * @return array
     */
    public static function get(int $limit): array
    {
        return array_map([__CLASS__, 'decideOn'], self::getRange($limit));
    }

    /**
     * @param int $limit
     *
     * @return array
     */
    private static function getRange(int $limit): array
    {
        $range = range(1, $limit);

        return array_combine($range, $range);
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
        return self::isDividableBy(Fizz::divisor())($i);
    }

    /**
     * @param int $i
     *
     * @return bool
     */
    private static function isBuzz(int $i): bool
    {
        return self::isDividableBy(Buzz::divisor())($i);
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
}
