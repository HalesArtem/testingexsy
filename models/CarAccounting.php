<?php

namespace app\models;

use yii\base\Model;
use Yii;


class CarAccounting extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'car_accounting';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['number', 'brand','model','color'], 'required','message' =>'Fill in the field'],
            [['brand', 'model'], 'string', 'max' => 80],
            ['number', 'string', 'max' => 15],
            [['payment'],'boolean'],
            [['brand','model','number','comment'], 'match', 'pattern' => '|[0-9A-Za-zа-яА-Я\s]{1,}?$|', 'message' =>'problems'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'brand' => 'Brand',
            'model' => 'Model',
            'number' => 'Number',
            'color' => 'Color',
            'payment' => 'Payment',
            'comment' => 'Comment',
        ];
    }
}
