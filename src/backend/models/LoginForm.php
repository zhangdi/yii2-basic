<?php
/**
 * @copyright Copyright (c) 2016 Zhang Di <zhangdi_me@163.com>
 */

namespace app\backend\models;


use yii\base\Model;

class LoginForm extends Model
{
    public $email;
    public $password;

    public function attributeLabels()
    {
        return [
            'email'=>'邮箱',
            'password'=>'密码'
        ];
    }

}