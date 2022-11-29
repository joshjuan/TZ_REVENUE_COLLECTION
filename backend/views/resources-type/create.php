<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\ResourcesType */

$this->title = 'Create Resources Type';
$this->params['breadcrumbs'][] = ['label' => 'Resources Types', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="resources-type-create">

    <h4><?= Html::encode($this->title) ?></h4>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
