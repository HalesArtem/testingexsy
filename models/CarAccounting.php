<?php

namespace app\models;

use yii\base\Model;
use Yii;
//
//id        не вводится
//number    (о)стринг с валидацией для русского авто
///payment   (н)галочка где можно вести только булиан значение галочка есть или нет(оплата)
//comment   (н)может быть много текста но обязательно екранировать слеши и скрипты(опасная зона)
//brand     (0)типо ауди лексус и тд
//model     (0)a3 , model s, 301 ,и тд
//color     (0) пустое но обязательно нужно указать что за поле










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
            [['payment'],'boolean'],
           // [['comment','brand','model'],'string', 'message' =>'is not string'],
            [['brand', 'model'], 'string', 'max' => 80],
            ['brand', 'match', 'pattern' => '[0-9A-Za-zа-яА-Я\s]*', 'message' =>'problem brand'],
//            ['model', 'match', 'pattern' => '[0-9A-Za-zа-яА-Я\s]*', 'message' =>'problem model'],
//            ['number', 'match', 'pattern' => '[0-9A-Za-zа-яА-Я\s]*', 'message' =>'problem number'],
//            ['comment', 'match', 'pattern' => '[0-9A-Za-zа-яА-Я\s]*', 'message' =>'problem comment'],
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
