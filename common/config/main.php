<?php
return [
    'aliases' => [
        '@bower' => '@vendor/bower-asset',
        '@npm'   => '@vendor/npm-asset',
    ],
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'components' => [
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        'view' => [
            'theme' => [
                'pathMap' => [
                    '@app/views' => '@vendor/dmstr/yii2-adminlte-asset/example-views/yiisoft/yii2-app'
                ],
            ],
        ],
        'authManager' => [
            'class' => 'yii\rbac\DbManager',
            // uncomment if you want to cache RBAC items hierarchy
            // 'cache' => 'cache',
        ],
        'user' => [
            'identityClass' => 'common\models\User',
            'enableAutoLogin' => false,
            'enableSession' => true,
            'authTimeout' => 12000, //20 minutes
            'identityCookie' => ['name' => '_identity-frontend', 'httpOnly' => true],
        ],
        'session' => [
            // this is the name of the session cookie used for login on the frontend
            'class' => 'yii\web\Session',
            'name' => 'advanced-backend',
            'timeout' => 12000,
        ],
        'as beforeRequest' => [
            'class' => 'yii\filters\AccessControl',
            'rules' => [
                [
                    'allow' => true,
                    'actions' => ['login'],
                ],
                [
                    'allow' => true,
                    'roles' => ['@'],
                ],
            ],
            'denyCallback' => function () {
                return Yii::$app->response->redirect(['site/login']);
            },
        ],
    ],

    'modules' => [
        'reportico' => [
            'class' => 'reportico\reportico\Module' ,
            'controllerMap' => [
                'reportico' => 'reportico\reportico\controllers\ReporticoController',
                'mode' => 'reportico\reportico\controllers\ModeController',
                'ajax' => 'reportico\reportico\controllers\AjaxController',
            ]
        ],
    ],
];
