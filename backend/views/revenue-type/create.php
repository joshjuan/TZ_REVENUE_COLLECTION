<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\RevenueType */

$this->title = 'Create Revenue Type';
$this->params['breadcrumbs'][] = ['label' => 'Revenue Types', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="revenue-type-create">

    <h4><?= Html::encode($this->title) ?></h4>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
