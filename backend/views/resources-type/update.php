<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\ResourcesType */

$this->title = 'Update Resources Type: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Resources Types', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="resources-type-update">

    <h4><?= Html::encode($this->title) ?></h4>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
