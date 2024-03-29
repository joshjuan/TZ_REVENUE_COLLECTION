<?php

use backend\models\Agent;
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use backend\models\User;

/* @var $this yii\web\View */
/* @var $model backend\models\User */
/* @var $form yii\widgets\ActiveForm */
?>


<section class="container clearfix main_section">
    <div class="col-sm-11">
        <div class="panel-body">
            <?php $form = ActiveForm::begin(); ?>
            <div class="col-sm-10 no-padding">
                <div class="col-sm-6">
                    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>
                </div>
                <div class="col-sm-6">
                    <?= $form->field($model, 'email')->textInput(['maxlength' => 100]) ?>
                </div>
            </div>

            <div class="col-sm-10 no-padding">
                <div class="col-sm-6">
                    <?= $form->field($model, 'phone')->textInput(['maxlength' => true]) ?>
                </div>
                <div class="col-sm-6">
                    <?= $form->field($model, 'username')->textInput(['maxlength' => 200]) ?>
                </div>
            </div>
            <div class="col-sm-10 no-padding">
                <div class="col-sm-6">
                    <?= $form->field($model, 'password')->passwordInput(['maxlength' => 200]) ?>
                </div>
                <div class="col-sm-6">
                    <?= $form->field($model, 'repassword')->passwordInput(['maxlength' => 100]) ?>
                </div>
            </div>
            <div class="col-sm-10 no-padding">
                <div class="col-sm-6">
                    <?= $form->field($model, 'zone_id')->dropDownList(Agent::getZones(), ['prompt' => '-- select Zone name --']) ?>
                </div>
                <div class="col-sm-6">
                    <?= $form->field($model, 'status')->dropDownList(Agent::getArrayStatus()) ?>
                </div>
            </div>
            <div class="form-group col-xs-10 col-sm-6 col-lg-4 no-padding edusecArLangCss">
                <div class="col-xs-6">
                    <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-block btn-success' : 'btn btn-block btn-success']) ?>
                </div>
                <div class="col-xs-6">
                    <?= Html::a(Yii::t('app', 'Cancel'), ['index'], ['class' => 'btn btn-default btn-block']) ?>
                </div>
            </div>
            <?php ActiveForm::end(); ?>
        </div>
    </div>
</section>




