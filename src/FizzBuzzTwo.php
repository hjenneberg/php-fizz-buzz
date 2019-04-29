<?php

declare(strict_types=1);

namespace HJenneberg\FizzBuzz;

/**
 * Class FizzBuzzTwo
 */
class FizzBuzzTwo implements FizzBuzzInterface
{
   /**
     * @param int $limit
     *
     * @return array
     */
    public static function get(int $limit): array
    {
        $items = [];

        for ($i=1; $i <= $limit; $i++) {
            if (0 === $i%15) {
                $items[$i] = 'FizzBuzz';
                continue;
            }
            if (0 === $i%5) {
                $items[$i] = 'Buzz';
                continue;
            }
            if (0 === $i%3) {
                $items[$i] = 'Fizz';
                continue;
            }

            $items[$i] = $i;
        }

        return $items;
    }
}
