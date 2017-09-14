<?php

namespace app\modules\api\controllers\actions;

use app\models\Data;
use Yii;
use yii\base\Action;

class SavereportAction extends \yii\rest\Action
{
    public $modelClass = '';

    public function run()
    {
        $request = Yii::$app->request;
        $get = $request->get();
        $data = json_decode($get['data']);
        $db = new Data();
        $db->code = $data->code;
        $db->type = $data->type;
        $db->message = $data->message;
        $db->application = $data->application;
        (isset($data->status))?($db->status = $data->status):($db->status = 'получено');
        $db->save();
        return "";
    }


}