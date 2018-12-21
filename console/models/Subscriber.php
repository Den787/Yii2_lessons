<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 19.12.2018
 * Time: 13:59
 */

namespace console\models;
use Yii;


class Subscriber
{
    public static function getList()
    {
        $sql = 'SELECT * FROM subscriber';
        return Yii::$app->db->createCommand($sql)->queryAll();
    }
}