<?php

declare(strict_types=1);

namespace HJenneberg\FizzBuzz\Parts;

/**
 * Class Fizz
 */
class Fizz implements PartInterface
{
    /**
     * @return string
     */
    public static function title(): string
    {
        return 'Fizz';
    }

    /**
     * @return int
     */
    public static function divisor(): int
    {
        return 3;
    }
}
