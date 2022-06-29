<?php

use yii\db\Schema;
use yii\db\Migration;

class m201204_042924_Relations extends Migration
{
    public function safeUp()
    {
                    $this->addForeignKey('fk_accessory_category_id', '{{%accessory}}', 'category_id', 'category', 'id');
                        $this->addForeignKey('fk_bill_user_id', '{{%bill}}', 'user_id', 'user', 'id');
                        $this->addForeignKey('fk_bill_detail_bill_id', '{{%bill_detail}}', 'bill_id', 'bill', 'id');
                                                            $this->addForeignKey('fk_phone_category_id', '{{%phone}}', 'category_id', 'category', 'id');
                        $this->addForeignKey('fk_phone_accessory_accessory_id', '{{%phone_accessory}}', 'accessory_id', 'accessory', 'id');
            $this->addForeignKey('fk_phone_accessory_phone_id', '{{%phone_accessory}}', 'phone_id', 'phone', 'id');
                        $this->addForeignKey('fk_profile_user_id', '{{%profile}}', 'user_id', 'user', 'id');
                        $this->addForeignKey('fk_rating_item_id', '{{%rating}}', 'item_id', 'item', 'id');
            $this->addForeignKey('fk_rating_user_id', '{{%rating}}', 'user_id', 'user', 'id');
                        $this->addForeignKey('fk_social_account_user_id', '{{%social_account}}', 'user_id', 'user', 'id');
                        $this->addForeignKey('fk_token_user_id', '{{%token}}', 'user_id', 'user', 'id');
                            }

    public function safeDown()
    {

               $this->dropForeignKey('fk_accessory_category_id', '{{%accessory}}');
                       $this->dropForeignKey('fk_bill_user_id', '{{%bill}}');
                       $this->dropForeignKey('fk_bill_detail_bill_id', '{{%bill_detail}}');
                                                           $this->dropForeignKey('fk_phone_category_id', '{{%phone}}');
                       $this->dropForeignKey('fk_phone_accessory_accessory_id', '{{%phone_accessory}}');
           $this->dropForeignKey('fk_phone_accessory_phone_id', '{{%phone_accessory}}');
                       $this->dropForeignKey('fk_profile_user_id', '{{%profile}}');
                       $this->dropForeignKey('fk_rating_item_id', '{{%rating}}');
           $this->dropForeignKey('fk_rating_user_id', '{{%rating}}');
                       $this->dropForeignKey('fk_social_account_user_id', '{{%social_account}}');
                       $this->dropForeignKey('fk_token_user_id', '{{%token}}');
                        
    }
}
