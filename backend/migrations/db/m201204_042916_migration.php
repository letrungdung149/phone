<?php

use yii\db\Schema;
use yii\db\Migration;

class m201204_042916_migration extends Migration
{
    public function safeUp()
    {
        $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';

        $this->createTable(
            '{{%migration}}',
            [
                'version'=> Schema::TYPE_STRING.'(180) NOT NULL',
                'apply_time'=> Schema::TYPE_INTEGER.'(11)',
                ],
            $tableOptions
        );
    $this->insert('{{%migration}}',['version'=>'m000000_000000_base','apply_time'=>'1606742194']);
$this->insert('{{%migration}}',['version'=>'m201125_075311_accessory','apply_time'=>'1606742196']);
$this->insert('{{%migration}}',['version'=>'m201125_075312_bill','apply_time'=>'1606742196']);
$this->insert('{{%migration}}',['version'=>'m201125_075313_bill_detail','apply_time'=>'1606742196']);
$this->insert('{{%migration}}',['version'=>'m201125_075314_category','apply_time'=>'1606742196']);
$this->insert('{{%migration}}',['version'=>'m201125_075315_item','apply_time'=>'1606742196']);
$this->insert('{{%migration}}',['version'=>'m201125_075317_phone','apply_time'=>'1606742196']);
$this->insert('{{%migration}}',['version'=>'m201125_075318_phone_accessory','apply_time'=>'1606742196']);
$this->insert('{{%migration}}',['version'=>'m201125_075319_profile','apply_time'=>'1606742196']);
$this->insert('{{%migration}}',['version'=>'m201125_075320_rating','apply_time'=>'1606742196']);
$this->insert('{{%migration}}',['version'=>'m201125_075321_social_account','apply_time'=>'1606742196']);
$this->insert('{{%migration}}',['version'=>'m201125_075322_token','apply_time'=>'1606742197']);
$this->insert('{{%migration}}',['version'=>'m201125_075323_user','apply_time'=>'1606742197']);
$this->insert('{{%migration}}',['version'=>'m201125_075324_Relations','apply_time'=>'1606742197']);
$this->insert('{{%migration}}',['version'=>'m201125_083904_phone_fix_memmory','apply_time'=>'1606742197']);
$this->insert('{{%migration}}',['version'=>'m201125_091817_phone_fix_memory_512','apply_time'=>'1606742197']);
$this->insert('{{%migration}}',['version'=>'m201125_092948_phone_add_slug','apply_time'=>'1606742197']);
$this->insert('{{%migration}}',['version'=>'m201126_103823_accessory_add_slug_column','apply_time'=>'1606742197']);
$this->insert('{{%migration}}',['version'=>'m201126_162619_accessory_fix_img_string','apply_time'=>'1606742197']);
$this->insert('{{%migration}}',['version'=>'m201127_072530_drop_table','apply_time'=>'1606742422']);
$this->insert('{{%migration}}',['version'=>'m201127_072611_accessory','apply_time'=>'1606742422']);
$this->insert('{{%migration}}',['version'=>'m201127_072612_bill','apply_time'=>'1606742422']);
$this->insert('{{%migration}}',['version'=>'m201127_072613_bill_detail','apply_time'=>'1606742422']);
$this->insert('{{%migration}}',['version'=>'m201127_072614_category','apply_time'=>'1606742422']);
$this->insert('{{%migration}}',['version'=>'m201127_072615_item','apply_time'=>'1606742422']);
$this->insert('{{%migration}}',['version'=>'m201127_072617_phone','apply_time'=>'1606742423']);
$this->insert('{{%migration}}',['version'=>'m201127_072618_phone_accessory','apply_time'=>'1606742423']);
$this->insert('{{%migration}}',['version'=>'m201127_072619_profile','apply_time'=>'1606742423']);
$this->insert('{{%migration}}',['version'=>'m201127_072620_rating','apply_time'=>'1606742423']);
$this->insert('{{%migration}}',['version'=>'m201127_072621_social_account','apply_time'=>'1606742423']);
$this->insert('{{%migration}}',['version'=>'m201127_072622_token','apply_time'=>'1606742423']);
$this->insert('{{%migration}}',['version'=>'m201127_072623_user','apply_time'=>'1606742423']);
$this->insert('{{%migration}}',['version'=>'m201127_072624_Relations','apply_time'=>'1606742423']);
$this->insert('{{%migration}}',['version'=>'m201201_070350_fix_bill','apply_time'=>'1607051422']);
$this->insert('{{%migration}}',['version'=>'m201204_030804_add_sale_item','apply_time'=>'1607051478']);

    }

    public function safeDown()
    {
        $this->dropTable('{{%migration}}');
    }
}
