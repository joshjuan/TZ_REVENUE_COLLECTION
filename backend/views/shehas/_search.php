<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\ShehasSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="shehas-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'date_time') ?>

    <?= $form->field($model, 'region_id') ?>

    <?= $form->field($model, 'location_id') ?>

    <?= $form->field($model, 'full_names') ?>

    <?php // echo $form->field($model, 'mobile_number') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
