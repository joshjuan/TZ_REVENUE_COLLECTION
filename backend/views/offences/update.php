<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Offences */

$this->title = 'Update Offences: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Offences', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="offences-update">

    <h4><?= Html::encode($this->title) ?></h4>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
