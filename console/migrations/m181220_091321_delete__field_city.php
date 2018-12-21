<?php

use yii\db\Migration;

/**
 * Class m181220_091321_delete__field_city
 */
class m181220_091321_delete__field_city extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->dropColumn('employee', 'city');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m181220_091321_delete__field_city cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m181220_091321_delete__field_city cannot be reverted.\n";

        return false;
    }
    */
}
