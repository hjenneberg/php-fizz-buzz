<?php

declare(strict_types=1);

namespace HJenneberg\FizzBuzz\Parts;

/**
 * Class Buzz
 */
class Buzz implements PartInterface
{
    /**
     * @return string
     */
    public static function title(): string
    {
        return 'Buzz';
    }

    /**
     * @return int
     */
    public static function divisor(): int
    {
        return 5;
    }
}
