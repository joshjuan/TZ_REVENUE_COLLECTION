<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Shehas */

$this->title = 'Create Shehas';
$this->params['breadcrumbs'][] = ['label' => 'Shehas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="shehas-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
