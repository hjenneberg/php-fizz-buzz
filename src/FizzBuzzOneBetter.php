<?php

declare(strict_types=1);

namespace HJenneberg\FizzBuzz;

/**
 * Class FizzBuzzOneBetter
 */
class FizzBuzzOneBetter implements FizzBuzzInterface
{
    /**
     * @param int $limit
     *
     * @return array
     */
    public static function get(int $limit): array
    {
        $range = range(1, $limit);

        return array_map(
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
            array_combine($range, $range)
        );
    }
}
