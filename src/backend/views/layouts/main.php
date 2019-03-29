<?php
/**
 * @copyright Copyright (c) 2016 Zhang Di <zhangdi_me@163.com>
 */

use yii\bootstrap4\Nav;
use yii\helpers\Html;
use yii\web\View;
use yii\widgets\Menu;

/** @var $content string */
/** @var $this View */

$navItems = [
    ['label' => '控制台', 'options' => ['class' => 'header']],
    ['label' => '首页', 'url' => ['default/index']],
    ['label' => '菜单组 A', 'options' => ['class' => 'header']],
    ['label' => '菜单组 A-1', 'url' =>'javascript:;'],
    ['label' => '菜单组 A-2', 'url' =>'javascript:;'],
    ['label' => '菜单组 A-3', 'url' =>'javascript:;'],
    ['label' => '菜单组 B', 'options' => ['class' => 'header']],
    ['label' => '菜单组 B-1', 'url' =>'javascript:;'],
    ['label' => '菜单组 B-2', 'url' =>'javascript:;'],
    ['label' => '菜单组 B-3', 'url' =>'javascript:;'],
    ['label' => '菜单组 C', 'options' => ['class' => 'header']],
    ['label' => '菜单组 C-1', 'url' =>'javascript:;'],
    ['label' => '菜单组 C-2', 'url' =>'javascript:;'],
    ['label' => '菜单组 C-3', 'url' =>'javascript:;'],
    ['label' => '菜单组 D', 'options' => ['class' => 'header']],
    ['label' => '菜单组 D-1', 'url' =>'javascript:;'],
    ['label' => '菜单组 D-2', 'url' =>'javascript:;'],
    ['label' => '菜单组 D-3', 'url' =>'javascript:;'],
];

$this->beginContent(__DIR__ . '/frame.php');
?>
<div class="d-flex" id="wrapper">
    <!-- Sidebar -->
    <div class="bg-dark shadow" id="sidebar-wrapper">
        <div class="sidebar-heading text-center ">
            <?= Html::a('后台管理', ['default/index']) ?>
        </div>
        <?= Menu::widget([
            'options' => [
                'class' => 'sidebar-nav'
            ],
            'items' => $navItems,
        ]) ?>
    </div>
    <!-- /#sidebar-wrapper -->

    <!-- Page Content -->
    <div id="page-content-wrapper">
        <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom shadow">
            <button class="btn btn-primary" id="menu-toggle">导航</button>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <?= Nav::widget([
                    'options' => ['class' => 'ml-auto mt-2 mt-lg-0'],
                    'items' => [
                        ['label' => 'My Name', 'items' => [
                            ['label' => '退出登录', 'url' => ['default/logout'], 'linkOptions' => ['data-method' => 'post']]
                        ]]
                    ]
                ]) ?>
            </div>
        </nav>

        <div class="container-fluid">
            <?= $content ?>
        </div>
    </div>

</div>
<?php $this->endContent() ?>

