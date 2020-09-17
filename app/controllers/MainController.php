<?php
/**
 * Created by PhpStorm.
 * User: Iurii
 * Date: 14.09.2020
 * Time: 12:37
 */

namespace app\controllers;


use core\App;

class MainController extends AppController
{
    public function indexAction()
    {
        $this->setMeta(App::$app->getProperty('site_name'),
            'Изделия ручной работы',
            'Хэндмэйд, ручная работа, игрушки, подарки');

        $data1Name = 'data1Value';
        $data2Name = 'data2Value';
        $this->set(compact('data1Name', 'data2Name'));
    }
}