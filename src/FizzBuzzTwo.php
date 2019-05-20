<?php

declare(strict_types=1);

namespace HJenneberg\FizzBuzz;

/**
 * Class FizzBuzzTwo
 */
final class FizzBuzzTwo implements FizzBuzzStaticInterface
{
    use DecideTrait;

    /**
     * @param int $limit
     *
     * @return array
     */
    public static function get(int $limit): array
    {
        $items = [];

        for ($i = 1; $i <= $limit; $i++) {
            $items[$i] = self::decide($i);
        }

        return $items;
    }
}
