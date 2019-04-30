<?php

declare(strict_types=1);

namespace HJenneberg\FizzBuzz;

/**
 * Class FizzBuzzTwoA
 */
class FizzBuzzTwoA implements FizzBuzzStaticInterface
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
            if (0 === $i % 15) {
                $items[$i] = 'FizzBuzz';
            } elseif (0 === $i % 5) {
                $items[$i] = 'Buzz';
            } elseif (0 === $i % 3) {
                $items[$i] = 'Fizz';
            } else {
                $items[$i] = $i;
            }
        }

        return $items;
    }
}
