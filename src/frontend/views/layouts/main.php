<?php
/**
 * @copyright Copyright (c) 2016 Zhang Di <zhangdi_me@163.com>
 */

/** @var $content string */

use app\frontend\assets\FrontendAsset;
use yii\bootstrap4\Html;
use yii\bootstrap4\Nav;
use yii\bootstrap4\NavBar;

FrontendAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>

    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>

<body>
<?php $this->beginBody() ?>

<?php NavBar::begin([
    'brandLabel' => Yii::$app->name,
    'options' => ['class' => 'navbar-expand-md navbar-dark bg-dark'],
]) ?>
<?= Nav::widget([
    'options' => [
        'class' => 'navbar-nav ml-auto'
    ],
    'items' => [
        ['label' => '首页', 'url' => Yii::$app->homeUrl],
        ['label' => '关于', 'url' => ['default/about']],
    ],
]) ?>
<?php NavBar::end() ?>

<div class="main-content">
    <?= $content ?>
</div>

<!-- Footer -->
<footer class="py-5 bg-dark">
    <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; Your Website <?=date("Y")?></p>
    </div>
    <!-- /.container -->
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>

