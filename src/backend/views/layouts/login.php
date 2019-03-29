<?php
/**
 * @copyright Copyright (c) 2016 Zhang Di <zhangdi_me@163.com>
 */

use yii\web\View;

/** @var $content string */
/** @var $this View */

$this->beginContent(__DIR__ . '/frame.php');
?>
<div class="main-login">
    <div class="container-fluid">
        <?= $content ?>
    </div>
</div>
<?php $this->endContent() ?>

