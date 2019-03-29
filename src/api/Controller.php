<?php
/**
 * @copyright Copyright (c) 2016 Zhang Di <zhangdi_me@163.com>
 */

namespace app\api;


use yii\web\Response;

class Controller extends \yii\rest\Controller
{
    public function behaviors()
    {
        $behaviors = parent::behaviors();
        $behaviors['contentNegotiator']['formats'] = [
            'application/json' => Response::FORMAT_JSON,
        ];
        return $behaviors;
    }
}