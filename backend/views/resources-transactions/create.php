<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\ResourcesTransactions */

$this->title = 'Create Resources Transactions';
$this->params['breadcrumbs'][] = ['label' => 'Resources Transactions', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="resources-transactions-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
