<?php

declare(strict_types=1);

namespace HJenneberg\FizzBuzz;

use Closure;

/**
 * Class FizzBuzzTwoCleanest
 */
class FizzBuzzTwoCleanest implements FizzBuzzInterface
{
    const FIZZ_DIV = 3;
    const FIZZ_ITSELF = 'Fizz';

    const BUZZ_DIV = 5;
    const BUZZ_ITSELF = 'Buzz';

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
        self::$isDividableByFizz = self::isDividableBy(self::FIZZ_DIV);
        self::$isDividableByBuzz = self::isDividableBy(self::BUZZ_DIV);

        $items = [];

        for ($i=1; $i <= $limit; $i++) {
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
            return self::FIZZ_ITSELF . self::BUZZ_ITSELF;
        }
        if (self::isBuzz($i)) {
            return self::BUZZ_ITSELF;
        }
        if (self::isFizz($i)) {
            return self::FIZZ_ITSELF;
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
