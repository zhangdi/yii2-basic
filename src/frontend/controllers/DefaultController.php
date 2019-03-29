<?php
/**
 * @copyright Copyright (c) 2016 Zhang Di <zhangdi_me@163.com>
 */

namespace app\frontend\controllers;


use app\components\WebController;
use yii\web\ErrorAction;

class DefaultController extends WebController
{
    public function actions()
    {
        return [
            'error'=>[
                'class'=>ErrorAction::class
            ]
        ];
    }

    public function actionIndex()
    {
        return $this->render('index');
    }

}