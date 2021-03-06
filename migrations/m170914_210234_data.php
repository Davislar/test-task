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
