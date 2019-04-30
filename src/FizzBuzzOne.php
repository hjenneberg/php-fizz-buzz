<?php

declare(strict_types=1);

namespace HJenneberg\FizzBuzz;

/**
 * Class FizzBuzzOne
 */
class FizzBuzzOne implements FizzBuzzStaticInterface
{
    /**
     * @param int $limit
     *
     * @return array
     */
    public static function get(int $limit): array
    {
        $items = array_combine(range(1, $limit), range(1, $limit));
        $items = array_map(
            function (int $item) {
                if (0 === $item % 15) {
                    return 'FizzBuzz';
                }
                if (0 === $item % 5) {
                    return 'Buzz';
                }
                if (0 === $item % 3) {
                    return 'Fizz';
                }
                return $item;
            },
            $items
        );

        return $items;
    }
}
