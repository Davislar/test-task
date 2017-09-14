<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "data".
 *
 * @property integer $id
 * @property integer $code
 * @property integer $type
 * @property string $status
 * @property string $application
 * @property string $message
 */
class Data extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'data';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['code', 'type'], 'required'],
            [['code', 'type'], 'integer'],
            [['status'], 'string'],
            [['application'], 'string', 'max' => 20],
            [['message'], 'string', 'max' => 1000],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'Ид',
            'code' => 'Код',
            'type' => 'Тип',
            'status' => 'Status',
            'application' => 'Приложение (application)',
            'message' => 'Сообщение',
        ];
    }
}
