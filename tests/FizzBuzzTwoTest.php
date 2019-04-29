<?php

declare(strict_types=1);

use HJenneberg\FizzBuzz\FizzBuzzTwo;
use PHPUnit\Framework\TestCase;

/**
 * Class FizzBuzzTwoTest
 */
final class FizzBuzzTwoTest extends TestCase
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
        $result = FizzBuzzTwo::get(16);

        self::assertSame($expected, $result);
    }
}
