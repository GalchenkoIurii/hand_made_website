<?php
/**
 * Created by PhpStorm.
 * User: Iurii
 * Date: 14.09.2020
 * Time: 10:30
 */

namespace core;


class Router
{
    protected static $routes = [];
    protected static $route = [];

    public static function add($regexp, $route = [])
    {
        self::$routes[$regexp] = $route;
    }

    public static function getRoutes()
    {
        return self::$routes;
    }

    public static function getRoute()
    {
        return self::$route;
    }
}