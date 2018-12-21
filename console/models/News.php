<?php

namespace console\models;
use Yii;

class news
{
   const STATUS_NOT_SEND =1;
    public static function getList()
    {
        $sql = 'SELECT * FROM news WHERE status = ' . self::STATUS_NOT_SEND; //magic numbers
        $result = Yii::$app->db->createCommand($sql) ->queryAll();
       return self::prepareList($result);

    }

    public static function prepareList($result)
    {
        if (!empty($result) && is_array($result)) {
            foreach ($result as &$item) {
                $item['content'] = Yii::$app->stringHelper->getShort($item['content']); //если убрать значение 30 то будет браться 20 по константе из конфига
            }
        }
        return $result;
    }

}