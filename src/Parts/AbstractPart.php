<?php

declare(strict_types=1);

namespace HJenneberg\FizzBuzz\Parts;

/**
 * Class AbstractPart
 */
abstract class AbstractPart implements PartInterface
{
    /**
     * @return int
     */
    abstract protected static function divisor(): int;

    /**
     * @param int $i
     *
     * @return bool
     */
    public static function is(int $i): bool
    {
        return 0 === $i % static::divisor();
    }
}
