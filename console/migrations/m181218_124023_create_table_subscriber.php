<?php

use yii\db\Migration;

/**
 * Class m181218_124023_create_table_subscriber
 */
class m181218_124023_create_table_subscriber extends Migration
{

    public function Up() //применить миграцию
    {
        $sql = 'CREATE TABLE subscriber (id INT(11) AUTO_INCREMENT PRIMARY KEY, email VARCHAR(255) UNIQUE);';
        Yii::$app->db->createCommand($sql)->execute();
    }


    public function Down() //откатить миграцию
    {
        $sql = 'DROP TABLE subscriber;';
        Yii::$app->db->createCommand($sql)->execute();
    }


}
