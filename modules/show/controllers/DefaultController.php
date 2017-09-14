<?php

namespace app\modules\show\controllers;

use app\modules\show\controllers\actions\IndexAction;
use yii\web\Controller;
use Yii;

/**
 * Default controller for the `show` module
 */
class DefaultController extends Controller
{
    public function actions()
    {
        return [
            'index' => [
                'class' => IndexAction::className()
            ],
        ];
    }
}
