<?php

use yii\db\Migration;

class m170914_210234_data extends Migration
{
    public function up()
    {
        $this->createTable('data', [
            'id' => $this->primaryKey(),
            'code' => $this->smallInteger(6)->notNull(),
            'type' => "tinyint not null",
            'status' => "ENUM('получено','прочитано','исправлено') not null DEFAULT 'получено'",
            'application' => $this->string(20)->notNull(),
            'message' => $this->string(1000)->notNull(),
        ]);

//        Yii::$app->db->createCommand()->createTable('data', [
//            'id' => 'pk',
//            'code' => 'smallint(6)',
//            'type' => 'tinyint(4)',
//            'status' => 'ENUM(\'получено\',\'прочитано\',\'исправлено\')',
//            'application' => 'varchar(20)',
//            'message' => 'varchar(1000)',
//        ]);
//        Yii::$app->db->createCommand()->addPrimaryKey('', 'data', 'id');
    }

    public function safeDown()
    {
        echo "m170914_210234_data cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m170914_210234_data cannot be reverted.\n";

        return false;
    }
    */
}
