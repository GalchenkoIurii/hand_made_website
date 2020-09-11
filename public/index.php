<?php
/**
 * Created by PhpStorm.
 * User: Iurii
 * Date: 10.09.2020
 * Time: 17:57
 */

require_once dirname(__DIR__) . '/config/init.php';

new \core\App();

var_dump(\core\App::$app->getProperties());