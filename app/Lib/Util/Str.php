<?php
namespace App\Lib\Util;

class Str {
    /**
     * Check whether an string is empty
     *
     * @param mixed $value
     */
    public static function isEmpty($value)
    {
        return !self::isNotEmpty($value);
    }

    /**
     * Check whether an string is not empty
     *
     * @param mixed $value
     */
    public static function isNotEmpty($value)
    {
        return (null !== $value && '' !== $value);
    }
}