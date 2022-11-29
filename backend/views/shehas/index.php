<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\ShehasSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Shehas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="shehas-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Shehas', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= \fedemotta\datatables\DataTables::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

           // 'id',
            'date_time',
            'region_id',
            'location_id',
            'full_names',
            //'mobile_number',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
