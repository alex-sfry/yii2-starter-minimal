<?php

$urlManager = require __DIR__ . '/url_manager.php';
$assetManager = require __DIR__ . '/asset_manager.php';

return [
    'assetManager' => $assetManager,
    'request' => [
        // !!! insert a secret key in the following (if it is empty) - this is required by cookie validation
        'cookieValidationKey' => '07G+6ibi#?jZ82]Pi;"6$52o55f{5:[7',
        'parsers' => [
            'application/json' => 'yii\web\JsonParser', //requred for ajax form POST submissions
        ]
    ],
    'cache' => [
        'class' => 'yii\caching\FileCache',
    ],
    // 'session' => [
    //     'useCookies' => false,
    // ],
    'user' => [
        'identityClass' => 'app\modules\user\models\User',
        'enableAutoLogin' => true,
        'loginUrl' => ['/user/user/login']
        // 'loginUrl' => null,
        // 'enableSession' => false
    ],
    'errorHandler' => [
        'errorAction' => 'site/error',
    ],
    'mailer' => [
        'class' => \yii\symfonymailer\Mailer::class,
        'viewPath' => '@app/mail',
        // send all mails to a file by default.
        'useFileTransport' => YII_ENV_DEV ? true : false,
        // 'transport' => MAIL_TRANSPORT
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
    'db' => [
        'class' => 'yii\db\Connection',
        'dsn' => 'sqlite:@app/db.sqlite',
        // 'on afterOpen' => function ($event) {
        //     $db = $event->sender;
        //     $db->createCommand('PRAGMA journal_mode=WAL')->execute();
        // },
        'enableSchemaCache' => YII_ENV !== 'dev' ? true : false,
        'schemaCacheDuration' => YII_ENV !== 'dev' ? 3600 : null,
        'schemaCache' => YII_ENV !== 'dev' ? 'cache' : null,
    ],
    'urlManager' => $urlManager
];
