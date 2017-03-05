<?php
namespace App\Lib\Util;

class Arr
{
//     /**
//      * Remove list keys from a given array
//      *
//      * ['one' => 'value', 'two' => 'value', 'three' => 'value', 'four' => 'value'];
//      *
//      * @param array $array
//      * @param array|mixed $keys array of keys which would like to remove from that array
//      * @return array
//      */
//     public static function except(array $array, array $keys)
//     {
//         return array_diff_key($array, array_flip($keys));
//     }

    /**
     * Return the values from a single column in the input array
     *
     * @see array_column() (PHP 5 >= 5.5.0, PHP 7)
     *
     * @param \Illuminate\Database\Eloquent\Collection|array $array
     * @param string $column
     * @return array
     */
    public static function column($array, $column)
    {
        $results = [];
        foreach($array as $item) {
            $results[] = $item[$column];
        }
        return $results;
    }

    /**
     * Convert a multi-dimensional array to array with key => value
     *
     * [['key' => 'brand', 'value' => 'Toyota']] => ['brand' => 'Toyota']
     *
     * @see \Illuminate\Support\Collection.pluck()
     *
     * @param \Illuminate\Database\Eloquent\Collection|array $array
     * @param string $key
     * @param string $value
     * @return array
     */
    public static function keyValue($array, $key = 'key', $value = 'value') {
        $results = [];
        foreach($array as $item) {
            $results[$item[$key]] = $item[$value];
        }
        return $results;
    }

    /**
     * Check the difference of arrays
     *
     * @param array $array1
     * @param array $array2
     * @return boolean
     */
    public static function hasDuplicate(array $array1, array $array2) {
        return array_intersect($array1, $array2) ? true : false;
    }

    /**
     * Check whether an array is empty
     *
     * @param array $value
     */
    public static function isEmpty(array $value)
    {
        return !self::isNotEmpty($value);
    }

    /**
     * Check whether an array is not empty
     *
     * @param array $value
     */
    public static function isNotEmpty(array $value)
    {
        return $value;
    }
}