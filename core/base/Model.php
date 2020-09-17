<?php
/**
 * Created by PhpStorm.
 * User: Iurii
 * Date: 17.09.2020
 * Time: 15:34
 */

namespace core\base;


use core\Db;

abstract class Model
{
    public $attributes = [];
    public $errors = [];
    public $rules = [];
    public $db;

    public function __construct()
    {
        $dbInstance = new Db();
        $this->db = $dbInstance->getDbConnection();
    }
}