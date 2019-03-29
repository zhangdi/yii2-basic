<?php
/**
 * @copyright Copyright (c) 2016 Zhang Di <zhangdi_me@163.com>
 */

namespace app\backend\controllers;


use app\backend\Controller;
use app\backend\models\LoginForm;

class DefaultController extends Controller
{
    public function accessRules(): array
    {
        return [
//            ['allow' => true, 'roles' => ['@']],
//            ['allow' => true, 'roles' => ['?'], 'actions' => ['login']],
        ];
    }

    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionLogin()
    {
        $this->layout = 'login';
        $model = new LoginForm();
        return $this->render('login',[
            'model'=>$model
        ]);
    }
}