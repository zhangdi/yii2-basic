<?php
/**
 * @copyright Copyright (c) 2016 Zhang Di <zhangdi_me@163.com>
 */

namespace app\backend;


use app\components\WebController;

class Controller extends WebController
{
    public function accessRules(): array
    {
        return [
            ['allow' => true, 'roles' => ['@']]
        ];
    }
}