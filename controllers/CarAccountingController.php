<?php

namespace app\controllers;
use Yii;
use app\models\CarAccounting;
use yii\web\Controller;


class CarAccountingController extends Controller
{
    public function actionIndex()
    {
        $form = new CarAccounting();

        if ($form->load(Yii::$app->request->post()) && $form->validate()) {

            $this->getView()->registerJs("alert('Well done');");

            $form->insert('CarAccounting');
            $form->save();
        }

        $cars = CarAccounting::find()->all();
        return $this->render('index', [
            'form' => $form,
            'cars' => $cars,
        ]);
    }
}
