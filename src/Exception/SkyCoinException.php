<?php


declare(strict_types=1);

namespace SkyCoin\Exception;

use SkyCoin\Exception\SkyCoinAPIException;

/**
 * Class SkyCoinException
 * @package SkyCoin\Exception
 */
class SkyCoinException extends SkyCoinAPIException
{
    /**
     * @param string $method
     * @param string $expected
     * @param string $got
     * @return SkyCoinException
     */
    public static function unexpectedResultType(string $method, string $expected, string $got): self
    {
        return new self(
            sprintf('Method [%s] expects result type %s, got %s', $method, strtoupper($expected), strtoupper($got))
        );
    }
}
