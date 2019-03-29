<?php
/**
 * @copyright Copyright (c) 2016 Zhang Di <zhangdi_me@163.com>
 */

namespace app\backend;


class Module extends \yii\base\Module
{
    public $layout = 'main';
    public $controllerNamespace = 'app\backend\controllers';

    public function init()
    {
        parent::init();
        \Yii::$app->name = '后台';
        \Yii::$app->set('user', [
            'class' => 'yii\web\User',
            'identityClass' => 'app\models\User',
            'loginUrl' => [$this->id.'/default/login']
        ]);
    }
}