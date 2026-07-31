<?php

return [
    // 'converter' => [
    //     'class' => 'yii\web\AssetConverter',
    //     'commands' => [],
    // ],
    'appendTimestamp' => true,
    // 'linkAssets' => true,
    // 'forceCopy' => YII_DEBUG,
    'bundles' => [
        'yii\web\JqueryAsset' => [
            'sourcePath' => '@bower/jquery/dist',
            'js' => ['jquery.min.js'],
            'jsOptions' => []
        ],
        'yii\bootstrap5\BootstrapAsset' => [
            'basePath' => '@webroot',
            'baseUrl' => '@web',
            'css' => ['src/css/bootstrap.min.css'],
        ],
    ]
];
