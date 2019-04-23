<?php

declare(strict_types=1);

namespace HJenneberg\FizzBuzz;

use Closure;

/**
 * Class FizzBuzzOneBetter
 */
final class FizzBuzzOneCleaner implements FizzBuzzInterface
{
    const FIZZ_DIV = 3;
    const FIZZ_ITSELF = 'Fizz';

    const BUZZ_DIV = 5;
    const BUZZ_ITSELF = 'Buzz';

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
        return self::isDividableBy(self::FIZZ_DIV)($i);
    }

    /**
     * @param int $i
     *
     * @return bool
     */
    private static function isBuzz(int $i): bool
    {
        return self::isDividableBy(self::BUZZ_DIV)($i);
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
     * @param int $limit
     *
     * @return array
     */
    private static function getRange(int $limit): array
    {
        $range = range(1, $limit);

        return array_combine($range, $range);
    }

}
