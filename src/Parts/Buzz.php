<?php

declare(strict_types=1);

namespace HJenneberg\FizzBuzz\Parts;

/**
 * Class Buzz
 */
class Buzz extends AbstractPart
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
    protected static function divisor(): int
    {
        return 5;
    }
}
