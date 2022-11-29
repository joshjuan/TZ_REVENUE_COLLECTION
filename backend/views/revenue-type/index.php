<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\RevenueTypeSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Revenue Types';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="revenue-type-index">

    <h4><?= Html::encode($this->title) ?></h4>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Revenue Type', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= \fedemotta\datatables\DataTables::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //  'id',
            'name',
            [
                'attribute' => 'status',
                'value' => function ($model) {
                    if ($model->status == \backend\models\RevenueType::ACTIVE) {

                        return 'ACTIVE';
                    } elseif ($model->status == \backend\models\RevenueType::INACTIVE) {
                        return 'IN ACTIVE';
                    }
                }],

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
