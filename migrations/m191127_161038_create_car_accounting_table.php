<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%car_accounting}}`.
 */
class m191127_161038_create_car_accounting_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('car_accounting', [
            'id' => $this->primaryKey(),
            'brand' => $this->string(80),
            'model' => $this->string(80),
            'number' => $this->string(15),
            'color' => $this->string(40),
            'payment' => $this->boolean(),
            'comment' => $this->text(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('car_accounting');
    }
}
