<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\UserLoginDetails */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="user-login-details-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'login_user_id')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'login_status')->textInput() ?>

    <?= $form->field($model, 'last_login_at')->textInput() ?>

    <?= $form->field($model, 'logout_at')->textInput() ?>

    <?= $form->field($model, 'user_ip_address')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
