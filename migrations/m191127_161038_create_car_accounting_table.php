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
            'brand' => $this->string(),
            'model' => $this->string(),
            'number' => $this->string(15),
            'color' => $this->string(),
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
