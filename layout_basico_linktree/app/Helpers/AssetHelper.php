<?php

namespace App\Helpers;

class AssetHelper
{
    /**
     * Get the path to a versioned Mix file.
     *
     * @param  string  $path
     * @param  string  $manifestDirectory
     * @return \Illuminate\Support\HtmlString
     */
    public static function asset($path, $secure = null)
    {
        return asset($path, $secure);
    }

    /**
     * Get the path to a versioned Mix file.
     *
     * @param  string  $path
     * @param  string  $manifestDirectory
     * @return \Illuminate\Support\HtmlString
     */
    public static function mix($path, $manifestDirectory = '')
    {
        return asset($path);
    }
}
