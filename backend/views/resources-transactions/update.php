<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\ResourcesTransactions */

$this->title = 'Update Resources Transactions: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Resources Transactions', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="resources-transactions-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
