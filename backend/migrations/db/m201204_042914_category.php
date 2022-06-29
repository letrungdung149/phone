<?php

use yii\db\Schema;
use yii\db\Migration;

class m201204_042914_category extends Migration
{
    public function safeUp()
    {
        $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';

        $this->createTable(
            '{{%category}}',
            [
                'id'=> Schema::TYPE_PK.'',
                'name'=> Schema::TYPE_STRING.'(255) NOT NULL',
                'created_at'=> Schema::TYPE_INTEGER.'(11) NOT NULL',
                'updated_at'=> Schema::TYPE_INTEGER.'(11) NOT NULL',
                ],
            $tableOptions
        );
    $this->insert('{{%category}}',['id'=>'511','name'=>'Apple','created_at'=>'1606451097','updated_at'=>'1606451097']);
$this->insert('{{%category}}',['id'=>'512','name'=>'Samsung
','created_at'=>'1606451125','updated_at'=>'1606451125']);
$this->insert('{{%category}}',['id'=>'513','name'=>'Xiaomi
','created_at'=>'1606451125','updated_at'=>'1606451125']);
$this->insert('{{%category}}',['id'=>'514','name'=>'OPPO
','created_at'=>'1606451125','updated_at'=>'1606451125']);
$this->insert('{{%category}}',['id'=>'515','name'=>'Nokia
','created_at'=>'1606451125','updated_at'=>'1606451125']);
$this->insert('{{%category}}',['id'=>'516','name'=>'Realme
','created_at'=>'1606451125','updated_at'=>'1606451125']);
$this->insert('{{%category}}',['id'=>'517','name'=>'Vsmart
','created_at'=>'1606451125','updated_at'=>'1606451125']);
$this->insert('{{%category}}',['id'=>'518','name'=>'ASUS
','created_at'=>'1606451125','updated_at'=>'1606451125']);
$this->insert('{{%category}}',['id'=>'519','name'=>'Huawei
','created_at'=>'1606451125','updated_at'=>'1606451125']);
$this->insert('{{%category}}',['id'=>'520','name'=>'Samsung				','created_at'=>'1606451219','updated_at'=>'1606451219']);
$this->insert('{{%category}}',['id'=>'521','name'=>'Xiaomi				','created_at'=>'1606451222','updated_at'=>'1606451222']);
$this->insert('{{%category}}',['id'=>'522','name'=>'JBL				','created_at'=>'1606451223','updated_at'=>'1606451223']);
$this->insert('{{%category}}',['id'=>'523','name'=>'Sony				','created_at'=>'1606451227','updated_at'=>'1606451227']);
$this->insert('{{%category}}',['id'=>'524','name'=>'Anker				','created_at'=>'1606451229','updated_at'=>'1606451229']);
$this->insert('{{%category}}',['id'=>'525','name'=>'PPF','created_at'=>'1606451232','updated_at'=>'1606451232']);
$this->insert('{{%category}}',['id'=>'526','name'=>'ZMI				','created_at'=>'1606451233','updated_at'=>'1606451233']);
$this->insert('{{%category}}',['id'=>'527','name'=>'Aukey				','created_at'=>'1606451237','updated_at'=>'1606451237']);
$this->insert('{{%category}}',['id'=>'528','name'=>'Garmin				','created_at'=>'1606451239','updated_at'=>'1606451239']);
$this->insert('{{%category}}',['id'=>'529','name'=>'GoPro				','created_at'=>'1606451240','updated_at'=>'1606451240']);
$this->insert('{{%category}}',['id'=>'530','name'=>'Native','created_at'=>'1606451243','updated_at'=>'1606451243']);
$this->insert('{{%category}}',['id'=>'531','name'=>'JCPal				','created_at'=>'1606451245','updated_at'=>'1606451245']);
$this->insert('{{%category}}',['id'=>'532','name'=>'Energizer				','created_at'=>'1606451249','updated_at'=>'1606451249']);
$this->insert('{{%category}}',['id'=>'533','name'=>'UAG				','created_at'=>'1606451253','updated_at'=>'1606451253']);

    }

    public function safeDown()
    {
        $this->dropTable('{{%category}}');
    }
}
