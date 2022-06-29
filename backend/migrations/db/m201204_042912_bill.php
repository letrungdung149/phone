<?php

use yii\db\Schema;
use yii\db\Migration;

class m201204_042912_bill extends Migration
{
    public function safeUp()
    {
        $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';

        $this->createTable(
            '{{%bill}}',
            [
                'id'=> Schema::TYPE_PK.'',
                'user_id'=> Schema::TYPE_INTEGER.'(11) NOT NULL',
                'sub_total'=> Schema::TYPE_DOUBLE.' NOT NULL',
                'grand_total'=> Schema::TYPE_DOUBLE.' NOT NULL',
                'status'=> "enum('pending','completed')".' NOT NULL',
                'created_at'=> Schema::TYPE_INTEGER.'(11) NOT NULL',
                'updated_at'=> Schema::TYPE_INTEGER.'(11) NOT NULL',
                'quantity'=> Schema::TYPE_INTEGER.'(11) NOT NULL DEFAULT "1"',
                ],
            $tableOptions
        );

        $this->createIndex('user_id', '{{%bill}}','user_id',0);    $this->insert('{{%bill}}',['id'=>'14','user_id'=>'2','sub_total'=>'1000','grand_total'=>'200','status'=>'pending','created_at'=>'1606873840','updated_at'=>'1606873840','quantity'=>'1']);
$this->insert('{{%bill}}',['id'=>'15','user_id'=>'2','sub_total'=>'1000','grand_total'=>'200','status'=>'pending','created_at'=>'1606873841','updated_at'=>'1606873841','quantity'=>'1']);
$this->insert('{{%bill}}',['id'=>'16','user_id'=>'2','sub_total'=>'1000','grand_total'=>'200','status'=>'pending','created_at'=>'1606873842','updated_at'=>'1606873842','quantity'=>'1']);
$this->insert('{{%bill}}',['id'=>'17','user_id'=>'2','sub_total'=>'1000','grand_total'=>'200','status'=>'pending','created_at'=>'1606873843','updated_at'=>'1606873843','quantity'=>'1']);
$this->insert('{{%bill}}',['id'=>'18','user_id'=>'2','sub_total'=>'1000','grand_total'=>'200','status'=>'pending','created_at'=>'1606873844','updated_at'=>'1606873844','quantity'=>'1']);
$this->insert('{{%bill}}',['id'=>'19','user_id'=>'2','sub_total'=>'1000','grand_total'=>'200','status'=>'pending','created_at'=>'1606873845','updated_at'=>'1606873845','quantity'=>'1']);
$this->insert('{{%bill}}',['id'=>'20','user_id'=>'2','sub_total'=>'1000','grand_total'=>'200','status'=>'pending','created_at'=>'1606873846','updated_at'=>'1606873846','quantity'=>'1']);
$this->insert('{{%bill}}',['id'=>'21','user_id'=>'2','sub_total'=>'1000','grand_total'=>'200','status'=>'pending','created_at'=>'1606873847','updated_at'=>'1606873847','quantity'=>'1']);
$this->insert('{{%bill}}',['id'=>'22','user_id'=>'2','sub_total'=>'1000','grand_total'=>'200','status'=>'pending','created_at'=>'1606873848','updated_at'=>'1606873848','quantity'=>'1']);
$this->insert('{{%bill}}',['id'=>'23','user_id'=>'2','sub_total'=>'1000','grand_total'=>'200','status'=>'pending','created_at'=>'1606873849','updated_at'=>'1606873849','quantity'=>'1']);
$this->insert('{{%bill}}',['id'=>'24','user_id'=>'2','sub_total'=>'1000','grand_total'=>'200','status'=>'pending','created_at'=>'1606873840','updated_at'=>'1606873840','quantity'=>'1']);
$this->insert('{{%bill}}',['id'=>'25','user_id'=>'2','sub_total'=>'1000','grand_total'=>'200','status'=>'pending','created_at'=>'1606873841','updated_at'=>'1606873841','quantity'=>'1']);
$this->insert('{{%bill}}',['id'=>'26','user_id'=>'2','sub_total'=>'1000','grand_total'=>'200','status'=>'pending','created_at'=>'1606873842','updated_at'=>'1606873842','quantity'=>'1']);
$this->insert('{{%bill}}',['id'=>'27','user_id'=>'2','sub_total'=>'1000','grand_total'=>'200','status'=>'pending','created_at'=>'1606873843','updated_at'=>'1606873843','quantity'=>'1']);
$this->insert('{{%bill}}',['id'=>'28','user_id'=>'2','sub_total'=>'1000','grand_total'=>'200','status'=>'pending','created_at'=>'1606873844','updated_at'=>'1606873844','quantity'=>'1']);
$this->insert('{{%bill}}',['id'=>'29','user_id'=>'2','sub_total'=>'1000','grand_total'=>'200','status'=>'pending','created_at'=>'1606873845','updated_at'=>'1606873845','quantity'=>'1']);
$this->insert('{{%bill}}',['id'=>'30','user_id'=>'2','sub_total'=>'1000','grand_total'=>'200','status'=>'pending','created_at'=>'1606873846','updated_at'=>'1606873846','quantity'=>'1']);
$this->insert('{{%bill}}',['id'=>'31','user_id'=>'2','sub_total'=>'1000','grand_total'=>'200','status'=>'pending','created_at'=>'1606873847','updated_at'=>'1606873847','quantity'=>'1']);
$this->insert('{{%bill}}',['id'=>'32','user_id'=>'2','sub_total'=>'1000','grand_total'=>'200','status'=>'pending','created_at'=>'1606873848','updated_at'=>'1606873848','quantity'=>'1']);
$this->insert('{{%bill}}',['id'=>'33','user_id'=>'2','sub_total'=>'1000','grand_total'=>'200','status'=>'pending','created_at'=>'1606873849','updated_at'=>'1606873849','quantity'=>'1']);

    }

    public function safeDown()
    {
        $this->dropIndex('user_id', '{{%bill}}');
        $this->dropTable('{{%bill}}');
    }
}
