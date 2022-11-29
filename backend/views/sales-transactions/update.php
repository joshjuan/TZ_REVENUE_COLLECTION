<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\SalesTransactions */

$this->title = 'Update Sales Transactions: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Sales Transactions', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="sales-transactions-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
