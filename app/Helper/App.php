<?php

namespace App\Helper;

class App
{
    /**
     * Import Javascript file
     *
     * @param string $path
     */
    public static function js($path)
    {
        return asset('js/' . $path);
    }

    /**
     * Import Css file
     *
     * @param string $path
     */
    public static function css($path)
    {
        return asset('css/' . $path);
    }

    /**
     * Import Font
     *
     * @param string $path
     */
    public static function font($path)
    {
        return asset('font/' . $path);
    }
}