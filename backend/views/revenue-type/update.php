<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\RevenueType */

$this->title = 'Update Revenue Type: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Revenue Types', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="revenue-type-update">

    <h4><?= Html::encode($this->title) ?></h4>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
