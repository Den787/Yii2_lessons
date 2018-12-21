<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 20.12.2018
 * Time: 14:46
 */

namespace console\models;
use Yii;

class Employee
{
    public static function getList()
    {
        $sql = 'SELECT * FROM employee';
        return Yii::$app->db->createCommand($sql)->queryAll();
    }

}
