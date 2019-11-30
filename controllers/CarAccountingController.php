<?php

namespace app\controllers;
use Yii;
use app\models\CarAccounting;
use yii\web\Controller;


class CarAccountingController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $forms = new CarAccounting();

        if ($forms->load(Yii::$app->request->post()) && $forms->validate()) {

            $forms->insert('CarAccounting');
            $forms->save();
        }
        $findAll = CarAccounting::find()->all();
        return $this->render('original', [
            'forms' => $forms,
            'findAll' => $findAll,
        ]);
    }
}
