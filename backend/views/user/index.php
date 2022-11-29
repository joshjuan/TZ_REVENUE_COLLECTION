<?php

use kartik\growl\Growl;
use yii\bootstrap\Modal;
use yii\helpers\Html;
use yii\grid\GridView;
use backend\models\User;
use yii\helpers\ArrayHelper;
use yii\helpers\Url;
use yii\widgets\Pjax;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\UserSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Users');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-index">

    <h4><?= Html::encode($this->title) ?></h4>

    <p>
        <?= Html::Button('Add User', ['value' => Url::to(['user/create']), 'class' => 'btn btn-success', 'id' => 'modalButton']) ?>
    </p>


    <?php
    Modal::begin([
        'header' => '<h5 class="page-header">
                                   <i class="fa fa-user"></i> User Details 
                                </h5>',
        'id' => 'modal',
        'size' => 'modal-lg',
    ]);
    echo "<div id='modalContent'></div>";
    Modal::end();
    ?>

    <?php Pjax::begin(); ?>
    <?= \fedemotta\datatables\DataTables::widget([
        'dataProvider' => $dataProvider,
        //'filterModel' => $searchModel,
        'layout' => "{summary}\n{items}\n{pager}",
        'summary' => '',
        'tableOptions' => [
            'class' => 'table table-striped table-bordered',
        ],
        'summary' => '',
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id',
            'username',
            // 'auth_key',
            // 'password_hash',
            // 'password_reset_token',
            'email:email',
            //'created_at',
            'role',
            [
                'attribute' => 'status',
                'value' => function ($model) {

                    if ($model->status == User::STATUS_ACTIVE) {
                        return 'Active';
                    } elseif ($model->status == User::STATUS_DELETED) {
                        return 'Disabled';
                    }
                }

            ],
          //  [
          //      'attribute' => 'created_at',
          //      'format' => ['date', 'Y-M-d H:i:s'],
          //  ],

            ['class' => 'yii\grid\ActionColumn', 'header' => 'Actions'],
        ],
    ]); ?>
    <?php Pjax::end(); ?>

</div>


