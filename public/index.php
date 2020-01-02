<?php

define('ENVIRONMENT', isset($_SERVER['PHP_ENV']) ? $_SERVER['PHP_ENV'] : 'dev');

if ( ENVIRONMENT === 'prod') {
    defined('YII_DEBUG') or define('YII_DEBUG', false);
    defined('YII_ENV') or define('YII_ENV', 'prod');
} else if ( ENVIRONMENT === 'dev') {
    defined('YII_DEBUG') or define('YII_DEBUG', true);
    defined('YII_ENV') or define('YII_ENV', 'dev');
} else {
    header('HTTP/1.1 503 Service Unavailable.', TRUE, 503);
    exit('The application environment is not set correctly.');
}

require __DIR__ . '/../vendor/autoload.php';
require __DIR__ . '/../vendor/yiisoft/yii2/Yii.php';

$config = require __DIR__ . '/../config/web.php';

(new yii\web\Application($config))->run();
