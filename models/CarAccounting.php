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
            [['brand','model','comment'], 'match', 'pattern' => '/^[A-ZА-Яa-zа-я0-9 ]{1,}$/', 'message' =>'problem with entering information'],
            ['number', 'match','pattern' => '/^[А-Яa-zа-я0-9]{1,15}$/', 'message' => 'not correct car number'],
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
