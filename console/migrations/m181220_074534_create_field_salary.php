<?php

use yii\db\Migration;

/**
 * Class m181220_074534_create_field_salary
 */
class m181220_074534_create_field_salary extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('employee','salary','integer(6) NOT NULL');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('employee', 'salary');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m181220_074534_create_field_salary cannot be reverted.\n";

        return false;
    }
    */
}
