<?php
/**
 * Created by PhpStorm.
 * User: Iurii
 * Date: 11.09.2020
 * Time: 11:52
 */

namespace core;


trait TSingletone
{
    private static $instance;

    public static function instance()
    {
        if (self::$instance === null) {
            self::$instance = new self;
        }
        return self::$instance;
    }
}