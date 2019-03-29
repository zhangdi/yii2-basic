<?php
/**
 * @copyright Copyright (c) 2016 Zhang Di <zhangdi_me@163.com>
 */

namespace app\api\controllers;


use app\api\Controller;

class DefaultController extends Controller
{
    public function actionIndex()
    {
        return [
            'name' => 'Yii2 Basic API',
            'description' => 'Yii2 Basic API description.',
        ];
    }
}