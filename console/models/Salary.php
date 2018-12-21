<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 20.12.2018
 * Time: 14:22
 */

namespace console\models;
use Yii;

class Salary
{

    public static function getList()
    {
        $sql = 'SELECT salary FROM employee';
        return  Yii::$app->db->createCommand($sql) ->queryAll();


    }

}