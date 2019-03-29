<?php
/**
 * @copyright Copyright (c) 2016 Zhang Di <zhangdi_me@163.com>
 */

namespace app\commands;


use app\components\CommandController;

/**
 * Hello World
 *
 * @package app\commands
 */
class HelloController extends CommandController
{
    /**
     * Say Hello World
     */
    public function actionIndex()
    {
        echo "Hello World\n";
    }
}