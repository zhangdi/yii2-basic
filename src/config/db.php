<?php
/**
 * @copyright Copyright (c) 2016 Zhang Di <zhangdi_me@163.com>
 */


use app\helpers\YamlHelper;

return [
    'class' => 'yii\db\Connection',
    'dsn' => YamlHelper::get('app.db.dsn'),
    'username' => YamlHelper::get('app.db.username'),
    'password' => YamlHelper::get('app.db.password'),
    'charset' => YamlHelper::get('app.db.charset'),
    'tablePrefix' => YamlHelper::get('app.db.tablePrefix'),
    // Schema cache options (for production environment)
    'enableSchemaCache' => !YII_DEBUG,
    'schemaCacheDuration' => 60,
    'schemaCache' => 'cache',
];