<?php
/**
 * @copyright Copyright (c) 2016 Zhang Di <zhangdi_me@163.com>
 */

namespace app\components;


use yii\filters\AccessControl;
use yii\filters\VerbFilter;
use yii\web\Controller;

abstract class WebController extends Controller
{
    /**
     * @return array
     */
    public function accessRules(): array
    {
        return [];
    }

    /**
     * @inheritdoc
     */
    public function verbs(): array
    {
        return [];
    }

    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        $behaviors = parent::behaviors();
        $accessRules = $this->accessRules();
        if (count($accessRules) > 0) {
            $behaviors['access'] = [
                'class' => AccessControl::class,
                'rules' => $this->accessRules(),
            ];
        }
        $behaviors['verbs'] = [
            'class' => VerbFilter::class,
            'actions' => $this->verbs(),
        ];

        return $behaviors;
    }
}