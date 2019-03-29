<?php
/**
 * @copyright Copyright (c) 2016 Zhang Di <zhangdi_me@163.com>
 */

use app\helpers\YamlHelper;

define('ROOT_PATH', dirname(dirname(__DIR__)));
define('VENDOR_PATH', ROOT_PATH . '/vendor');

require(VENDOR_PATH . '/autoload.php');

YamlHelper::load(ROOT_PATH . '/config.yml', true);

defined("YII_DEBUG") or define("YII_DEBUG", YamlHelper::get('app.debug'));
defined("YII_ENV") or define("YII_ENV", YamlHelper::get('app.env'));

// require Yii.php
require(VENDOR_PATH . '/yiisoft/yii2/Yii.php');