<?php

declare(strict_types=1);

use HJenneberg\FizzBuzz\FizzBuzzOne;
use PHPUnit\Framework\TestCase;

/**
 * Class FizzBuzzOneTest
 */
final class FizzBuzzOneTest extends TestCase
{
    /**
     * @noinspection PhpMethodNamingConventionInspection
     *
     * @test
     */
    final public static function it_fizz_buzzes()
    {
        $expected = [
            1 => 1, 2 => 2, 3 => 'Fizz', 4 => 4, 5 => 'Buzz',
            6 => 'Fizz', 7 => 7, 8 => 8, 9 => 'Fizz', 10 => 'Buzz',
            11 => 11, 12 => 'Fizz', 13 => 13, 14 => 14, 15 => 'FizzBuzz',
            16 => 16,
        ];

        self::assertSame($expected, FizzBuzzOne::get(16));
    }
}
