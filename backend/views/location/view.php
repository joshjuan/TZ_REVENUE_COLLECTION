<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Location */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Locations', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="location-view">

    <h4><?= Html::encode($this->title) ?></h4>


    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
          //  'id',
            'name',
            [
                'attribute'=>'region_id',
                'label'=>'Region',
                'value'=>$model->region->name,
            ],
            'created_at',
            'created_by',
        ],
    ]) ?>
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


</div>
