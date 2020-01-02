<?php

if ( ENVIRONMENT === 'prod' ) {
    $configPath = __DIR__ . '/';
} else if ( ENVIRONMENT === 'dev' ) {
    $configPath = __DIR__ . '/dev/';
} else {
    exit();
}

$params = require $configPath . 'params.php';
$db = require $configPath . 'db.php';
$mongodb = require $configPath . 'mongodb.php';
$redis = require $configPath . 'redis.php';
$view = require __DIR__ . '/view.php';

$config = [
    'id' => 'yii2-custom',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    'defaultRoute' => 'index',
    'components' => [
        'request' => [
            // !!! insert a secret key in the following (if it is empty) - this is required by cookie validation
            'cookieValidationKey' => '',
        ],
        'errorHandler' => [
            'errorAction' => 'error/error',
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
        'db' => $db,
        'view' => $view,
        'redis' => $redis,
        'mongodb' => $mongodb,
        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'rules' => [
            ],
        ],
    ],
    'params' => $params,
];

return $config;
