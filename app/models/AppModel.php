<?php
/**
 * Created by PhpStorm.
 * User: Iurii
 * Date: 17.09.2020
 * Time: 16:14
 */

namespace app\models;


use core\base\Model;

class AppModel extends Model
{
    public function getData($table)
    {
        $query = "SELECT * FROM $table";
        return $this->db->query($query)->fetchAll();
    }
}