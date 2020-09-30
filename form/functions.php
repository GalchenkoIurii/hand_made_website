<?php
/**
 * Created by PhpStorm.
 * User: Iurii
 * Date: 30.09.2020
 * Time: 10:47
 */

function load($data) {
    foreach ($_POST as $k => $v) {
        if (array_key_exists($k, $data)) {
            $data[$k]['value'] = trim($v);
        }
    }
    return $data;
}