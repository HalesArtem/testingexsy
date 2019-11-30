<?php

use yii\db\Migration;

/**
 * Class m191127_172942_insertTesting_car_accounting
 */
class m191127_172942_insertTesting_car_accounting extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->insert('car_accounting',[
            'brand' => '',
            'model' => '',
            'number' => '',
            'color' => '',
            'payment' => '',
            'comment' => '',
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m191127_172942_insertTesting_car_accounting cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m191127_172942_insertTesting_car_accounting cannot be reverted.\n";

        return false;
    }
    */
}
