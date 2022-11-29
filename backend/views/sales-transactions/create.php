<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\SalesTransactions */

$this->title = 'Create Sales Transactions';
$this->params['breadcrumbs'][] = ['label' => 'Sales Transactions', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="sales-transactions-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
