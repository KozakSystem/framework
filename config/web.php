<?php

$params = require(__DIR__ . '/params.php');

$config = [
    'id' => 'USA',
    'basePath' => dirname(__DIR__),
    'defaultRoute' => 'index/view',
    'layoutPath' => '@app/views/layouts',
    'viewPath' => '@app/views',
    'bootstrap' => ['log'],
    'vendorPath' => dirname(__DIR__) . '/vendor',
    'modules' => [

    ],
    'components' => [
        'request' => [
            // !!! insert a secret key in the following (if it is empty) - this is required by cookie validation
            'cookieValidationKey' => 'nvki0YG6CnLZX4PUjLgRQ3nBMFTOhq0D',
            'baseUrl'=> '',
        ],
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        'urlManager' => array(
            //'class' => 'yii\web\UrlManager',
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'rules' => require 'urls.php'
        ),
        'user' => [
            'identityClass' => 'app\models\User',
            'enableAutoLogin' => true,
        ],
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
        'mailer' => [
            'class' => 'yii\swiftmailer\Mailer',
            // send all mails to a file by default. You have to set
            // 'useFileTransport' to false and configure a transport
            // for the mailer to send real emails.
            'useFileTransport' => true,
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
        'thumbnail' => [
            'class' => 'himiklab\thumbnail\EasyThumbnail',
            'cacheAlias' => 'assets/gallery_thumbnails',
        ],
        'db' => require(__DIR__ . '/db.php'),
    ],
    'params' => $params,

    //'layouts' => 'app\themes\uausa\views\layouts\base.php',
    //'layoutPath' => 'app/themes/uausa/views/layouts',
    //'viewPath' => 'themes\uausa\views',
    //'defaultRoute' => 'app/controllers/IndexController::actionIndex()',

];

if (YII_ENV_DEV) {
    // configuration adjustments for 'dev' environment
    $config['bootstrap'][] = 'debug';

    $config['modules']['debug'] = 'yii\debug\Module';

    $config['bootstrap'][] = 'gii';
    $config['modules']['gii'] = 'yii\gii\Module';
}

return $config;
