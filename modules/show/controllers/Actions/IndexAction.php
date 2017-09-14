<?php
/**
 * Created by PhpStorm.
 * User: MedveD
 * Date: 17.05.2016
 * Time: 21:59
 */

namespace app\modules\show\controllers\actions;


use app\models\DataPagination;
use Yii;
use yii\base\Action;

class IndexAction extends Action
{
    public function run()
    {
        $searchModel = new DataPagination();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        $dataProvider->setPagination(['pageSize' => 10]);
        $column = [
            'id',
            'code',
            'type',
            'application',
            'message',
        ];

        return $this->controller->render('index', ['searchModel' => $searchModel,
            'dataProvider' => $dataProvider, 'column' => $column,]);
    }


}