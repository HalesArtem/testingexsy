<?php
/**
 * @var \app\models\CarAccounting $form
 * @var \app\models\CarAccounting $cars
 */

use yii\helpers\Html;
use yii\widgets\ActiveForm;


?>

<?php $forms = ActiveForm::begin(); ?>

<?= $forms->field($form, 'brand') ?>

<?= $forms->field($form, 'model') ?>

<?= $forms->field($form, 'number') ?>

<?= $forms->field($form, 'color')->dropDownList([
    '' => 'no entry',
    'red'       => 'red',
    'black'     => 'black',
    'white'     => 'white',
    'Yellow'    => 'Yellow',
    'Green'     => 'Green',
    'Blue'      => 'Blue',
    'Brown'     => 'Brown',
    'Red'       => 'Red',
    'Orange'    => 'Orange',
    'Pink'      => 'Pink',
    'Gray'      => 'Gray',
    'Black'     => 'Black',
    ]) ?>

<?= $forms->field($form, 'payment')->checkbox(); ?>

<?= $forms->field($form, 'comment')->textarea(); ?>


<?= Html::submitButton('Submit', [
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
        <?php foreach ($cars

        as $car): ?>
        <tbody>
        <tr>
            <th scope="row"><?= $car->id; ?></th>
            <td><?= $car->brand; ?></td>
            <td><?= $car->model; ?></td>
            <td><?= $car->number; ?></td>
            <td><?= $car->color; ?></td>
            <td><?= $car->payment; ?></td>
            <td><?= $car->comment; ?></td>
        </tr>
        <?php endforeach; ?>
</div>
</tbody>
</table>
