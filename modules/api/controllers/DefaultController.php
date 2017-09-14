<?php

namespace app\modules\api\controllers;

use app\modules\api\controllers\actions\IndexAction;
use app\modules\api\controllers\actions\SavereportAction;
use yii\web\Controller;

/**
 * Default controller for the `api` module
 */
class DefaultController extends \yii\rest\Controller
{
    public function actions()
    {
        return [
            'index' => [
                'class' => IndexAction::className()
            ],
            'savereport' => [
                'class' => SavereportAction::className()
            ],
        ];
    }
}
