<?php
/**
 * Created by PhpStorm.
 * User: Iurii
 * Date: 30.09.2020
 * Time: 10:46
 */

$fields = [
    'name' => [
        'field_name' => 'Имя',
        'required' => 1
    ],
    'email' => [
        'field_name' => 'Email',
        'required' => 1
    ],
    'phone' => [
        'field_name' => 'Номер телефона',
        'required' => 0
    ],
    'message' => [
        'field_name' => 'Сообщение',
        'required' => 1
    ],
    'captcha' => [
        'field_name' => 'Капча',
        'required' => 1,
        'mailable' => 0
    ]
];

$mail_settings = [
    'host' => 'smtp.mailtrap.io',
    'smtp_auth' => true,
    'username' => 'eb29dee74acb43', //mail_name@gmail.com
    'password' => '02aec395b56a3c',
    'smtp_secure' => null, //ssl //tls
    'port' => 2525,
    'from_email' => '33d2a05232-0c830b@inbox.mailtrap.io', //mail_name@gmail.com
    'from_name' => 'HandMade site',
    'to_email' => 'admin@mail.com'
];