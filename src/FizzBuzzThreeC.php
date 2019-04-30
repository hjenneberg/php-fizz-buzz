<?php

declare(strict_types=1);

namespace HJenneberg\FizzBuzz;

/**
 * Class FizzBuzzThreeC
 */
class FizzBuzzThreeC implements FizzBuzzInterface
{
    /**
     * @param int $limit
     *
     * @return array
     */
    public function get(int $limit): array
    {
        $items = [];

        for ($i = 1; $i <= $limit; $i++) {
            $items[$i] = $this->decideOn($i);
        }

        return $items;
    }

    /**
     * @param int $i
     *
     * @return int | string
     */
    private function decideOn(int $i)
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
