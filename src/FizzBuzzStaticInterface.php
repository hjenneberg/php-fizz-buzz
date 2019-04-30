<?php

declare(strict_types=1);

namespace HJenneberg\FizzBuzz;

/**
 * Interface FizzBuzzStaticInterface
 */
interface FizzBuzzStaticInterface
{
    /**
     * @param int $limit
     *
     * @return array
     */
    public static function get(int $limit): array;
}
