<?php
/**
 * Created by PhpStorm.
 * User: Iurii
 * Date: 11.09.2020
 * Time: 10:14
 */

namespace core;


class App
{
    public static $app;

    public function __construct()
    {
        $query = trim($_SERVER['QUERY_STRING'], '/');
        session_start();
        self::$app = Registry::instance();
    }
}