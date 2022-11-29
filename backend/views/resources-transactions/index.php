<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\ResourcesTransactionsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Resources Transactions';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="resources-transactions-index">

    <h4><?= Html::encode($this->title) ?></h4>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>


    <?= \fedemotta\datatables\DataTables::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

          //  'id',
            'revevue_type',
            'name',
            'unit_type',
            'amount',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
