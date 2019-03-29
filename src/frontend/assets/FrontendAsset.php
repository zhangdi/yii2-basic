<?php
/**
 * @copyright Copyright (c) 2016 Zhang Di <zhangdi_me@163.com>
 */

namespace app\frontend\assets;


use yii\web\AssetBundle;

class FrontendAsset extends AssetBundle
{
    public $sourcePath = '@app/frontend/assets';
    public $css = [
        'css/frontend.css'
    ];
    public $depends = [
        'yii\bootstrap4\BootstrapAsset',
        'yii\web\JqueryAsset'
    ];
    public $publishOptions = [
        'forceCopy' => YII_DEBUG,
    ];
}