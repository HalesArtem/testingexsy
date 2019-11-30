<?php
/**
 * @var \app\models\CarAccounting $forms
 * @var \app\models\CarAccounting $findAll
 */

use yii\helpers\Html;
use yii\widgets\ActiveForm;


?>

<?php $form = ActiveForm::begin(); ?>

<?= $form->field($forms, 'brand') ?>

<?= $form->field($forms, 'model') ?>

<?= $form->field($forms, 'number') ?>

<?= $form->field($forms, 'color')->dropDownList([
    '' => 'не указано',
    'красный' => 'красный',
    'черный' => 'черный',
    'белый' => 'белый',
]) ?>

<?= $form->field($forms, 'payment')->checkbox(); ?>

<?= $form->field($forms, 'comment')->textarea(); ?>


<?= Html::submitButton('Отправить', [
    'class' => 'btn btn-primary',
    'id' => 'btn']) ?>


<?php ActiveForm::end(); ?>
<div id="upload">
    <table class="table">
        <thead>
        <tr>
            <th scope="col">id</th>
            <th scope="col">Brand</th>
            <th scope="col">model</th>
            <th scope="col">number</th>
            <th scope="col">color</th>
            <th scope="col">payment</th>
            <th scope="col">comment</th>
        </tr>
        </thead>
        <?php foreach ($findAll

        as $find): ?>
        <tbody>
        <tr>
            <th scope="row"><?= $find->id; ?></th>
            <td><?= $find->brand; ?></td>
            <td><?= $find->model; ?></td>
            <td><?= $find->number; ?></td>
            <td><?= $find->color; ?></td>
            <td><?= $find->payment; ?></td>
            <td><?= $find->comment; ?></td>
        </tr>
        <?php endforeach; ?>
</div>
</tbody>
</table>
