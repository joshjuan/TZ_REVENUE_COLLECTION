<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\SalesTransactions */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Sales Transactions', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="sales-transactions-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'date_time',
            'trans_type:ntext',
            'client_id',
            'zone_id',
            'location_id',
            'resource_id',
            'weight_type',
            'weight',
            'plate_number',
            'phone_number',
            'amount',
            'market_id',
            'product_id',
            'advertisement_id',
            'vehicle_id',
            'route_id',
            'sheha_id',
            'seller_id',
            'buyer_id',
            'property_id',
            'property_type_id',
            'offence_type_id',
            'receipt_number',
            'user_id',
            'license_type_id',
            'license_number',
            'advert_ref_number',
            'percentage',
            'building_type_id',
            'reference_no',
            'payer_name',
            'cancelled_by',
            'cancelled_date_time',
            'cancelled_amount',
        ],
    ]) ?>

</div>
