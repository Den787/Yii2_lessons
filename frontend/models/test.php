<?php

namespace frontend\models;
use Yii;
// use frontend\components\StringHelper;

class Test
{
    /**
     * @param integer $max
     * @return array
     * @throws \yii\db\Exception
     */
    public static function getNewList($max)
    {
        $max = intval ($max); //приводим в int,чтоб исключить проблем
       // $sql = 'SELECT * FROM news - показывает все новости
        $sql = 'SELECT * FROM news LIMIT ' .$max; //показывает только 2 новости
        $result = Yii::$app->db->createCommand($sql)->queryAll();

      //  $helper = new StringHelper(); //стирается когда заканчивает работу данный метод
      //  $helper2 = Yii::$app->stringHelper; //создается в момент запуска приложения и живет до его конца

        if (!empty($result) && is_array($result)) {
            foreach ($result as &$item) {
                $item['content'] = Yii::$app->stringHelper->getShort($item['content'], 30); //если убрать значение 30 то будет браться 20 по константе из конфига
            }
        }
        return $result;

    }

    /**
     * @param integer $id
     * @return array|false
     * @throws \yii\db\Exception
     */

    public static function getItem($id)
    {
        $id = intval($id);
        $sql = "SELECT * FROM news WHERE id = $id";

        return Yii::$app->db->createCommand($sql)->queryOne(); //1 запись нужна
    }
}