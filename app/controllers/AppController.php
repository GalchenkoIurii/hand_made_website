<?php
/**
 * Created by PhpStorm.
 * User: Iurii
 * Date: 14.09.2020
 * Time: 14:55
 */

namespace app\controllers;


use app\models\AppModel;
use core\base\Controller;

class AppController extends Controller
{
    public $appModel;

    public function __construct($route)
    {
        parent::__construct($route);
        $this->appModel = new AppModel();
    }
}