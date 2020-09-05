<?php
/**
 * Created by PhpStorm.
 * User: Iurii
 * Date: 05.09.2020
 * Time: 20:46
 */

try {
    $pdo = new PDO('mysql:host=localhost;dbname=hand_made_db', 'root', '');
} catch (PDOException $exception) {
    echo "Ошибка подключения к БД";
}