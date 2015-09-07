<?php
$params = array_merge(
    require(__DIR__ . '/../../common/config/params.php'),
    require(__DIR__ . '/../../common/config/params-local.php'),
    require(__DIR__ . '/params.php'),
    require(__DIR__ . '/params-local.php')
);

return [
    'id' => 'app-backend',
    'basePath' => dirname(__DIR__),
    'controllerNamespace' => 'backend\controllers',
    'bootstrap' => ['log'],
    'modules' => [
    'social' => [
        // the module class
        'class' => 'kartik\social\Module',
 
        // the global settings for the facebook widget
        'facebook' => [
            'appId' => 'FACEBOOK_APP_ID',
        ],
],
],
    'components' => [
        
    'view' => [],

    
        'user' => [
            'identityClass' => 'common\models\User',
            'enableAutoLogin' => true,
        ],
        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
            'errorHandler' => [
                'errorAction' => 'site/error',
            ],
        ],
    
    'params' => $params,
];
