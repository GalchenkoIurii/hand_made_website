<?php
/**
 * Created by PhpStorm.
 * User: Iurii
 * Date: 11.09.2020
 * Time: 11:50
 */

namespace core;


class Registry
{
    use TSingletone;

    protected static $properties = [];

    public static function setProperty($name, $value)
    {
        self::$properties[$name] = $value;
    }

    public function getProperty($name)
    {
        if (isset(self::$properties[$name])) {
            return self::$properties[$name];
        }
        return null;
    }

    public function getProperties()
    {
        return self::$properties;
    }
}