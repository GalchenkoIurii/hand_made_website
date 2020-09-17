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
    public function __construct($route)
    {
        parent::__construct($route);
    }

    public function indexAction()
    {
        $this->setMeta(App::$app->getProperty('site_name'),
            'Изделия ручной работы',
            'Хэндмэйд, ручная работа, игрушки, подарки');

        $query = "SELECT * FROM gallery";
        $gallery_items = $this->appModel->getData($query);

        $this->set(compact('gallery_items'));
    }
}