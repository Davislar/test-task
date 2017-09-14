<?php
/**
 * Created by PhpStorm.
 * User: MedveD
 * Date: 17.05.2016
 * Time: 21:59
 */

namespace app\modules\api\controllers\actions;

use Yii;
use yii\base\Action;

class IndexAction extends Action
{
    public function run()
    {
        return $this->controller->render('index');
    }


}