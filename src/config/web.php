<?php
/**
 * @copyright Copyright (c) 2016 Zhang Di <zhangdi_me@163.com>
 */

use app\helpers\YamlHelper;

return [
    'defaultRoute' => 'frontend',
    'name' => YamlHelper::get('app.name'),
    'modules' => [
        'frontend' => [
            'class' => 'app\frontend\Module'
        ],
        'api' => [
            'class' => 'app\api\Module'
        ],
        YamlHelper::get('app.backend.id', 'backend') => [
            'class' => 'app\backend\Module'
        ]
    ],
    'components' => [
        'user' => [
            'identityClass' => 'app\models\User',
            'enableAutoLogin' => true,
        ],
        'errorHandler' => [
            'errorAction' => 'frontend/default/error',
        ],
        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
        ],
        'request' => [
            'cookieValidationKey' => YamlHelper::get('app.key')
        ],
    ]
];
