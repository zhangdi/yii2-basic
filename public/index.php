<?php
/**
 * @copyright Copyright (c) 2016 Zhang Di <zhangdi_me@163.com>
 */


use yii\helpers\ArrayHelper;
use yii\web\Application;

require dirname(__DIR__) . '/src/bootstrap/bootstrap.php';

$config = ArrayHelper::merge(
    require(ROOT_PATH . '/src/config/main.php'),
    require(ROOT_PATH . '/src/config/web.php')
);

(new Application($config))->run();