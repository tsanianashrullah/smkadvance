<?php

use yii\db\Schema;
use yii\db\Migration;

class m150815_114703_penambahan_field_foto extends Migration
{
    public function up()
    {
        $this->addColumn("jurusan" , 'foto' , Schema::TYPE_STRING);
    }

    public function down()
    {
        echo "m150815_114703_penambahan_field_foto cannot be reverted.\n";

        return false;
    }

    /*
    // Use safeUp/safeDown to run migration code within a transaction
    public function safeUp()
    {
    }

    public function safeDown()
    {
    }
    */
}
