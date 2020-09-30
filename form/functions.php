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

function validate($data) {
    $errors = '';
    foreach ($data as $k => $v) {
        if ($data[$k]['required'] && empty($data[$k]['value'])) {
            $errors .= "<li>Не заполнено поле {$data[$k]['field_name']}</li>";
        }
    }
    return $errors;
}

function set_captcha() {
    $num1 = rand(0, 10);
    $num2 = rand(0, 10);
    $_SESSION['captcha'] = $num1 + $num2;
    return "Введите сумму {$num1} + {$num2}";
}

function check_captcha($result) {
    return $_SESSION['captcha'] == $result;
}