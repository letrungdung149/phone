<?php

use yii\db\Schema;
use yii\db\Migration;

class m201204_042920_rating extends Migration
{
    public function safeUp()
    {
        $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';

        $this->createTable(
            '{{%rating}}',
            [
                'id'=> Schema::TYPE_PK.'',
                'item_id'=> Schema::TYPE_INTEGER.'(11) NOT NULL',
                'user_id'=> Schema::TYPE_INTEGER.'(11) NOT NULL',
                'score'=> Schema::TYPE_INTEGER.'(11) NOT NULL',
                'created_at'=> Schema::TYPE_INTEGER.'(11) NOT NULL',
                'updated_at'=> Schema::TYPE_INTEGER.'(11) NOT NULL',
                ],
            $tableOptions
        );

        $this->createIndex('item_id', '{{%rating}}','item_id',0);
        $this->createIndex('user_id', '{{%rating}}','user_id',0);    
    }

    public function safeDown()
    {
        $this->dropIndex('item_id', '{{%rating}}');
        $this->dropIndex('user_id', '{{%rating}}');
        $this->dropTable('{{%rating}}');
    }
}
