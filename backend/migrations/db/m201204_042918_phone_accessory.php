<?php

use yii\db\Schema;
use yii\db\Migration;

class m201204_042918_phone_accessory extends Migration
{
    public function safeUp()
    {
        $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';

        $this->createTable(
            '{{%phone_accessory}}',
            [
                'id'=> Schema::TYPE_PK.'',
                'phone_id'=> Schema::TYPE_INTEGER.'(11) NOT NULL',
                'accessory_id'=> Schema::TYPE_INTEGER.'(11) NOT NULL',
                ],
            $tableOptions
        );

        $this->createIndex('phone_id', '{{%phone_accessory}}','phone_id',0);
        $this->createIndex('accessory_id', '{{%phone_accessory}}','accessory_id',0);    $this->insert('{{%phone_accessory}}',['id'=>'1','phone_id'=>'1737','accessory_id'=>'4876']);
$this->insert('{{%phone_accessory}}',['id'=>'2','phone_id'=>'1768','accessory_id'=>'4876']);
$this->insert('{{%phone_accessory}}',['id'=>'3','phone_id'=>'1788','accessory_id'=>'4876']);
$this->insert('{{%phone_accessory}}',['id'=>'4','phone_id'=>'1788','accessory_id'=>'4877']);
$this->insert('{{%phone_accessory}}',['id'=>'5','phone_id'=>'1738','accessory_id'=>'4877']);
$this->insert('{{%phone_accessory}}',['id'=>'14','phone_id'=>'1776','accessory_id'=>'4878']);
$this->insert('{{%phone_accessory}}',['id'=>'15','phone_id'=>'1773','accessory_id'=>'4878']);
$this->insert('{{%phone_accessory}}',['id'=>'16','phone_id'=>'1772','accessory_id'=>'4878']);

    }

    public function safeDown()
    {
        $this->dropIndex('phone_id', '{{%phone_accessory}}');
        $this->dropIndex('accessory_id', '{{%phone_accessory}}');
        $this->dropTable('{{%phone_accessory}}');
    }
}
