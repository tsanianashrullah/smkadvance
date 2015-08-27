<?php

use yii\db\Schema;
use yii\db\Migration;

class m150808_135052_penambahan_field_deskripsi_di_jurusan extends Migration
{
    public function up()
    {
        $this->addColumn("jurusan" , 'deskripsi' , Schema::TYPE_STRING);
    }

    public function down()
    {
        echo "m150808_135052_penambahan_field_deskripsi_di_jurusan cannot be reverted.\n";

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
