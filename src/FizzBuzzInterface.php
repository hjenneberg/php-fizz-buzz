<?php

declare(strict_types=1);

namespace HJenneberg\FizzBuzz;

/**
 * Interface FizzBuzzInterface
 */
interface FizzBuzzInterface
{
    /**
     * @param int $limit
     *
     * @return array
     */
    public function get(int $limit): array;
}
