<?php

declare(strict_types=1);

namespace HJenneberg\FizzBuzz;

/**
 * Class FizzBuzzOne
 */
final class FizzBuzzOne implements FizzBuzzStaticInterface
{
    use DecideTrait;

    /**
     * @param int $limit
     *
     * @return array
     */
    public static function get(int $limit): array
    {
        return array_map([__CLASS__, 'decide'], self::range($limit));
    }

    /**
     * @param int $limit
     *
     * @return array
     */
    private static function range(int $limit): array
    {
        $range = range(1, $limit);

        return array_combine($range, $range);
    }
}
