<?php
/**
 * @copyright Copyright (c) 2016 Zhang Di <zhangdi_me@163.com>
 */

use app\helpers\YamlHelper;

$db = require(__DIR__ . '/db.php');

return [
    'id' => YamlHelper::get('app.id'),
    'vendorPath' => VENDOR_PATH,
    'basePath' => ROOT_PATH . '/src',
    'runtimePath' => ROOT_PATH . '/runtime',
    'controllerNamespace' => 'app\controllers',
    'aliases' => [
        '@bower' => '@vendor/bower-asset',
        '@npm' => '@vendor/npm-asset',
    ],

    'components' => [
        'cache' => [
            'class' => 'yii\caching\FileCache',
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
    ],
    'params' => YamlHelper::get('app.params', []),
];