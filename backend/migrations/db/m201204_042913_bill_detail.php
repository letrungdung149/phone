<?php

use yii\db\Schema;
use yii\db\Migration;

class m201204_042913_bill_detail extends Migration
{
    public function safeUp()
    {
        $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';

        $this->createTable(
            '{{%bill_detail}}',
            [
                'id'=> Schema::TYPE_PK.'',
                'bill_id'=> Schema::TYPE_INTEGER.'(11) NOT NULL',
                'item_id'=> Schema::TYPE_INTEGER.'(11) NOT NULL',
                'price'=> Schema::TYPE_DOUBLE.' NOT NULL',
                'quantity'=> Schema::TYPE_INTEGER.'(11) NOT NULL DEFAULT "1"',
                'amount'=> Schema::TYPE_DOUBLE.' NOT NULL',
                'created_at'=> Schema::TYPE_INTEGER.'(11) NOT NULL',
                'updated_at'=> Schema::TYPE_INTEGER.'(11) NOT NULL',
                ],
            $tableOptions
        );

        $this->createIndex('bill_id', '{{%bill_detail}}','bill_id',0);
        $this->createIndex('item_id', '{{%bill_detail}}','item_id',0);    $this->insert('{{%bill_detail}}',['id'=>'1','bill_id'=>'15','item_id'=>'8','price'=>'12312312','quantity'=>'1','amount'=>'3333','created_at'=>'1606874844','updated_at'=>'1606874844']);
$this->insert('{{%bill_detail}}',['id'=>'2','bill_id'=>'22','item_id'=>'3','price'=>'12312312','quantity'=>'1','amount'=>'3333','created_at'=>'1606874844','updated_at'=>'1606874844']);
$this->insert('{{%bill_detail}}',['id'=>'3','bill_id'=>'14','item_id'=>'7','price'=>'12312312','quantity'=>'1','amount'=>'3333','created_at'=>'1606874844','updated_at'=>'1606874844']);
$this->insert('{{%bill_detail}}',['id'=>'4','bill_id'=>'17','item_id'=>'2','price'=>'12312312','quantity'=>'1','amount'=>'3333','created_at'=>'1606874844','updated_at'=>'1606874844']);
$this->insert('{{%bill_detail}}',['id'=>'5','bill_id'=>'19','item_id'=>'7','price'=>'12312312','quantity'=>'1','amount'=>'3333','created_at'=>'1606874844','updated_at'=>'1606874844']);
$this->insert('{{%bill_detail}}',['id'=>'6','bill_id'=>'22','item_id'=>'3','price'=>'12312312','quantity'=>'1','amount'=>'3333','created_at'=>'1606874844','updated_at'=>'1606874844']);
$this->insert('{{%bill_detail}}',['id'=>'7','bill_id'=>'21','item_id'=>'3','price'=>'12312312','quantity'=>'1','amount'=>'3333','created_at'=>'1606874844','updated_at'=>'1606874844']);
$this->insert('{{%bill_detail}}',['id'=>'8','bill_id'=>'21','item_id'=>'12','price'=>'12312312','quantity'=>'1','amount'=>'3333','created_at'=>'1606874844','updated_at'=>'1606874844']);
$this->insert('{{%bill_detail}}',['id'=>'9','bill_id'=>'14','item_id'=>'4','price'=>'12312312','quantity'=>'1','amount'=>'3333','created_at'=>'1606874844','updated_at'=>'1606874844']);
$this->insert('{{%bill_detail}}',['id'=>'10','bill_id'=>'17','item_id'=>'5','price'=>'12312312','quantity'=>'1','amount'=>'3333','created_at'=>'1606874844','updated_at'=>'1606874844']);
$this->insert('{{%bill_detail}}',['id'=>'11','bill_id'=>'17','item_id'=>'7','price'=>'12312312','quantity'=>'1','amount'=>'3333','created_at'=>'1606874844','updated_at'=>'1606874844']);
$this->insert('{{%bill_detail}}',['id'=>'12','bill_id'=>'20','item_id'=>'10','price'=>'12312312','quantity'=>'1','amount'=>'3333','created_at'=>'1606874844','updated_at'=>'1606874844']);
$this->insert('{{%bill_detail}}',['id'=>'13','bill_id'=>'19','item_id'=>'3','price'=>'12312312','quantity'=>'1','amount'=>'3333','created_at'=>'1606874844','updated_at'=>'1606874844']);
$this->insert('{{%bill_detail}}',['id'=>'14','bill_id'=>'22','item_id'=>'6','price'=>'12312312','quantity'=>'1','amount'=>'3333','created_at'=>'1606874844','updated_at'=>'1606874844']);
$this->insert('{{%bill_detail}}',['id'=>'15','bill_id'=>'22','item_id'=>'6','price'=>'12312312','quantity'=>'1','amount'=>'3333','created_at'=>'1606874844','updated_at'=>'1606874844']);
$this->insert('{{%bill_detail}}',['id'=>'16','bill_id'=>'16','item_id'=>'8','price'=>'12312312','quantity'=>'1','amount'=>'3333','created_at'=>'1606874844','updated_at'=>'1606874844']);
$this->insert('{{%bill_detail}}',['id'=>'17','bill_id'=>'16','item_id'=>'10','price'=>'12312312','quantity'=>'1','amount'=>'3333','created_at'=>'1606874844','updated_at'=>'1606874844']);
$this->insert('{{%bill_detail}}',['id'=>'18','bill_id'=>'19','item_id'=>'8','price'=>'12312312','quantity'=>'1','amount'=>'3333','created_at'=>'1606874844','updated_at'=>'1606874844']);
$this->insert('{{%bill_detail}}',['id'=>'19','bill_id'=>'20','item_id'=>'6','price'=>'12312312','quantity'=>'1','amount'=>'3333','created_at'=>'1606874844','updated_at'=>'1606874844']);
$this->insert('{{%bill_detail}}',['id'=>'20','bill_id'=>'18','item_id'=>'1','price'=>'12312312','quantity'=>'1','amount'=>'3333','created_at'=>'1606874844','updated_at'=>'1606874844']);
$this->insert('{{%bill_detail}}',['id'=>'21','bill_id'=>'15','item_id'=>'1','price'=>'12312312','quantity'=>'1','amount'=>'3333','created_at'=>'1606874844','updated_at'=>'1606874844']);
$this->insert('{{%bill_detail}}',['id'=>'22','bill_id'=>'17','item_id'=>'2','price'=>'12312312','quantity'=>'1','amount'=>'3333','created_at'=>'1606874844','updated_at'=>'1606874844']);
$this->insert('{{%bill_detail}}',['id'=>'23','bill_id'=>'14','item_id'=>'10','price'=>'12312312','quantity'=>'1','amount'=>'3333','created_at'=>'1606874844','updated_at'=>'1606874844']);
$this->insert('{{%bill_detail}}',['id'=>'24','bill_id'=>'19','item_id'=>'3','price'=>'12312312','quantity'=>'1','amount'=>'3333','created_at'=>'1606874844','updated_at'=>'1606874844']);
$this->insert('{{%bill_detail}}',['id'=>'25','bill_id'=>'21','item_id'=>'10','price'=>'12312312','quantity'=>'1','amount'=>'3333','created_at'=>'1606874844','updated_at'=>'1606874844']);
$this->insert('{{%bill_detail}}',['id'=>'26','bill_id'=>'22','item_id'=>'7','price'=>'12312312','quantity'=>'1','amount'=>'3333','created_at'=>'1606874844','updated_at'=>'1606874844']);
$this->insert('{{%bill_detail}}',['id'=>'27','bill_id'=>'21','item_id'=>'8','price'=>'12312312','quantity'=>'1','amount'=>'3333','created_at'=>'1606874844','updated_at'=>'1606874844']);
$this->insert('{{%bill_detail}}',['id'=>'28','bill_id'=>'15','item_id'=>'4','price'=>'12312312','quantity'=>'1','amount'=>'3333','created_at'=>'1606874844','updated_at'=>'1606874844']);
$this->insert('{{%bill_detail}}',['id'=>'29','bill_id'=>'20','item_id'=>'6','price'=>'12312312','quantity'=>'1','amount'=>'3333','created_at'=>'1606874844','updated_at'=>'1606874844']);
$this->insert('{{%bill_detail}}',['id'=>'30','bill_id'=>'18','item_id'=>'6','price'=>'12312312','quantity'=>'1','amount'=>'3333','created_at'=>'1606874844','updated_at'=>'1606874844']);

    }

    public function safeDown()
    {
        $this->dropIndex('bill_id', '{{%bill_detail}}');
        $this->dropIndex('item_id', '{{%bill_detail}}');
        $this->dropTable('{{%bill_detail}}');
    }
}
