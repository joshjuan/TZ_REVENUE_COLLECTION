<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\ResourcesTypeSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Resources Types';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="resources-type-index">

    <h4><?= Html::encode($this->title) ?></h4>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Resources Type', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= \fedemotta\datatables\DataTables::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

           // 'id',
            'name',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
