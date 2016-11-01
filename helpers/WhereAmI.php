<?php

namespace MenaraSolutions\Geographer\Helpers;

/**
 * Class WhereAmI
 * @package MenaraSolutions\Geographer\Helpers
 */
class WhereAmI
{
    /**
     * @return string
     */
    public static function path()
    {
        return dirname(dirname(__FILE__)) . DIRECTORY_SEPARATOR . 'resources';
    }
}