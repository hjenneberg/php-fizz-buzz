<?php

declare(strict_types=1);

namespace HJenneberg\FizzBuzz;

/**
 * Class FizzBuzzTwoC
 */
class FizzBuzzTwoC implements FizzBuzzStaticInterface
{
    /**
     * @param int $limit
     *
     * @return array
     */
    public static function get(int $limit): array
    {
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
        return (0 === $i % 15)
            ? 'FizzBuzz'
            : ((0 === $i % 5)
                ? 'Buzz'
                : ((0 === $i % 3)
                    ? 'Fizz'
                    : $i));
    }
}
