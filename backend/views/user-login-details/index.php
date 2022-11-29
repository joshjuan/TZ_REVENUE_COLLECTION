<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\UserLoginDetailsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'User Login Details';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-login-details-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create User Login Details', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'login_detail_id',
            'login_user_id',
            'login_status',
            'last_login_at',
            'logout_at',
            //'user_ip_address',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
