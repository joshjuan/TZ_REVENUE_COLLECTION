<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\SalesTransactionsSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="sales-transactions-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'date_time') ?>

    <?= $form->field($model, 'trans_type') ?>

    <?= $form->field($model, 'client_id') ?>

    <?= $form->field($model, 'zone_id') ?>

    <?php // echo $form->field($model, 'location_id') ?>

    <?php // echo $form->field($model, 'resource_id') ?>

    <?php // echo $form->field($model, 'weight_type') ?>

    <?php // echo $form->field($model, 'weight') ?>

    <?php // echo $form->field($model, 'plate_number') ?>

    <?php // echo $form->field($model, 'phone_number') ?>

    <?php // echo $form->field($model, 'amount') ?>

    <?php // echo $form->field($model, 'market_id') ?>

    <?php // echo $form->field($model, 'product_id') ?>

    <?php // echo $form->field($model, 'advertisement_id') ?>

    <?php // echo $form->field($model, 'vehicle_id') ?>

    <?php // echo $form->field($model, 'route_id') ?>

    <?php // echo $form->field($model, 'sheha_id') ?>

    <?php // echo $form->field($model, 'seller_id') ?>

    <?php // echo $form->field($model, 'buyer_id') ?>

    <?php // echo $form->field($model, 'property_id') ?>

    <?php // echo $form->field($model, 'property_type_id') ?>

    <?php // echo $form->field($model, 'offence_type_id') ?>

    <?php // echo $form->field($model, 'receipt_number') ?>

    <?php // echo $form->field($model, 'user_id') ?>

    <?php // echo $form->field($model, 'license_type_id') ?>

    <?php // echo $form->field($model, 'license_number') ?>

    <?php // echo $form->field($model, 'advert_ref_number') ?>

    <?php // echo $form->field($model, 'percentage') ?>

    <?php // echo $form->field($model, 'building_type_id') ?>

    <?php // echo $form->field($model, 'reference_no') ?>

    <?php // echo $form->field($model, 'payer_name') ?>

    <?php // echo $form->field($model, 'cancelled_by') ?>

    <?php // echo $form->field($model, 'cancelled_date_time') ?>

    <?php // echo $form->field($model, 'cancelled_amount') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
