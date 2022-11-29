<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\RevenueType */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Revenue Types', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="revenue-type-view">

    <h4><?= Html::encode($this->title) ?></h4>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
           // 'id',
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
        ],
    ]) ?>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Back', ['index', 'id' => $model->id], ['class' => 'btn btn-warning']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

</div>
