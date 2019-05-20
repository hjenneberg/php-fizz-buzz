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
     * @return int
     */
    public static function divisor(): int;
}
