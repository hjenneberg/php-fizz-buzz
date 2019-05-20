<?php

declare(strict_types=1);

namespace HJenneberg\FizzBuzz\Parts;

/**
 * Interface PartInterface
 */
interface PartInterface
{
    /**
     * @return string
     */
    public static function title(): string;

    /**
     * @param int $i
     *
     * @return bool
     */
    public static function is(int $i): bool;
}
