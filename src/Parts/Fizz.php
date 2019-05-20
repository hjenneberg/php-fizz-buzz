<?php

declare(strict_types=1);

namespace HJenneberg\FizzBuzz\Parts;

/**
 * Class Fizz
 */
class Fizz extends AbstractPart
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
    protected static function divisor(): int
    {
        return 3;
    }
}
