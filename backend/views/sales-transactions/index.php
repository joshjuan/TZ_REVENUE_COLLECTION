<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\SalesTransactionsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Sales Transactions';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="sales-transactions-index">

    <h4><?= Html::encode($this->title) ?></h4>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= \fedemotta\datatables\DataTables::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

          //  'id',
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

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
