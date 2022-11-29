<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Offences */

$this->title = 'Create Offences';
$this->params['breadcrumbs'][] = ['label' => 'Offences', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="offences-create">

    <h4><?= Html::encode($this->title) ?></h4>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
