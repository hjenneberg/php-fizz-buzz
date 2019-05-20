<?php

declare(strict_types=1);

namespace HJenneberg\FizzBuzz\Parts;

/**
 * Class FizzBuzz
 */
class FizzBuzz implements PartInterface
{
    /**
     * @return string
     */
    public static function title(): string
    {
        return Fizz::title() . Buzz::title();
    }

    /**
     * @param int $i
     *
     * @return bool
     */
    public static function is(int $i): bool
    {
        return Fizz::is($i) && Buzz::is($i);
    }
}
