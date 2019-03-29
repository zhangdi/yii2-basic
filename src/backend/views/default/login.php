<?php
/**
 * @copyright Copyright (c) 2016 Zhang Di <zhangdi_me@163.com>
 */


use app\backend\models\LoginForm;
use yii\bootstrap4\ActiveForm;
use yii\helpers\Html;
use yii\web\View;

/** @var $this View */
/** @var $model LoginForm */

$this->title = '登录';
?>
<div class="login-box">
    <div class="card shadow">
        <div class="card-body p-5">
            <h1 class="card-title text-center mb-3" style="height: 5rem;line-height: 5rem;">登录</h1>

            <?php $form = ActiveForm::begin() ?>

            <?= $form->field($model, 'email')
                ->textInput(['placeholder' => $model->generateAttributeLabel('email')])
                ->label(false) ?>

            <?= $form->field($model, 'password')
                ->passwordInput(['placeholder' => $model->generateAttributeLabel('password')])
                ->label(false) ?>

            <p class="text-center">

                <?= Html::submitButton("登录", ['class' => 'btn btn-block btn-lg btn-primary']) ?>
            </p>
            <p class="text-center">
                <?= Html::a('忘记密码？', ['default/forgot']) ?>
            </p>
            <?php ActiveForm::end(); ?>
        </div>
    </div>
</div>
