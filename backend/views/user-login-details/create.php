<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\UserLoginDetails */

$this->title = 'Create User Login Details';
$this->params['breadcrumbs'][] = ['label' => 'User Login Details', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-login-details-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
