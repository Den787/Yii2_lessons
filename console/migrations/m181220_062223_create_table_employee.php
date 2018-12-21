<?php

use yii\db\Migration;

/**
 * Class m181220_062223_create_table_employee
 */
class m181220_062223_create_table_employee extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('employee', [
            'id' => $this->primaryKey(),
            'fio' => $this->text(255)->notNull(),
            'date_birthday' => $this->date()->notNull(),
            'city'=> $this->text(255),
            'date_of_work'=> $this ->date(),
            'work_experience' => $this->text(255),
            'position' => $this->text(255)->notNull(),
            'department_number' => $this->integer(6),
            'id_kod' => $this->integer(11)->unique()->notNull(),
            'email' => $this ->text(255),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('employee');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m181220_062223_create_table_employee cannot be reverted.\n";

        return false;
    }
    */
}
