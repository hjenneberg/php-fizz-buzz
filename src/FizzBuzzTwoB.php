<?php

declare(strict_types=1);

namespace HJenneberg\FizzBuzz;

/**
 * Class FizzBuzzTwoB
 */
class FizzBuzzTwoB implements FizzBuzzStaticInterface
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
            $items[$i] = (0 === $i % 15)
                ? 'FizzBuzz'
                : ((0 === $i % 5)
                    ? 'Buzz'
                    : ((0 === $i % 3)
                        ? 'Fizz'
                        : $i));
        }

        return $items;
    }
}
