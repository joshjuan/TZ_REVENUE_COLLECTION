<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\SalesTransactions */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="sales-transactions-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'date_time')->textInput() ?>

    <?= $form->field($model, 'trans_type')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'client_id')->textInput() ?>

    <?= $form->field($model, 'zone_id')->textInput() ?>

    <?= $form->field($model, 'location_id')->textInput() ?>

    <?= $form->field($model, 'resource_id')->textInput() ?>

    <?= $form->field($model, 'weight_type')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'weight')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'plate_number')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'phone_number')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'amount')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'market_id')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'product_id')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'advertisement_id')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'vehicle_id')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'route_id')->textInput() ?>

    <?= $form->field($model, 'sheha_id')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'seller_id')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'buyer_id')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'property_id')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'property_type_id')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'offence_type_id')->textInput() ?>

    <?= $form->field($model, 'receipt_number')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'user_id')->textInput() ?>

    <?= $form->field($model, 'license_type_id')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'license_number')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'advert_ref_number')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'percentage')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'building_type_id')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'reference_no')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'payer_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cancelled_by')->textInput() ?>

    <?= $form->field($model, 'cancelled_date_time')->textInput() ?>

    <?= $form->field($model, 'cancelled_amount')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
