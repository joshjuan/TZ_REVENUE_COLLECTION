<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Shehas */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="shehas-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'date_time')->textInput() ?>

    <?= $form->field($model, 'region_id')->textInput() ?>

    <?= $form->field($model, 'location_id')->textInput() ?>

    <?= $form->field($model, 'full_names')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'mobile_number')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
