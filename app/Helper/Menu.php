<?php

namespace App\Helper;

use Illuminate\Support\Facades\Request;

class Menu
{
    /**
     * Highlight the Current menu item
     *
     * @param string $path
     */
    public static function isActive($path)
    {
        return Request::is($path) ? 'active' : '';
    }
}