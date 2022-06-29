<?php

use yii\db\Schema;
use yii\db\Migration;

class m201216_040523_Relations extends Migration {

	public function safeUp() {
		$this->addForeignKey('fk_bill_user_id', '{{%bill}}', 'user_id', 'user', 'id', 'CASCADE', 'CASCADE');
		$this->addForeignKey('fk_bill_detail_bill_id', '{{%bill_detail}}', 'bill_id', 'bill', 'id', 'CASCADE', 'CASCADE');
		$this->addForeignKey('fk_bill_detail_product_id', '{{%bill_detail}}', 'product_id', 'product', 'id', 'CASCADE', 'CASCADE');
		$this->addForeignKey('fk_bill_info_bill_id', '{{%bill_info}}', 'bill_id', 'bill', 'id', 'CASCADE', 'CASCADE');
		$this->addForeignKey('fk_product_category_id', '{{%product}}', 'category_id', 'category', 'id', 'CASCADE', 'CASCADE');
		$this->addForeignKey('fk_product_relate_target_product_id', '{{%product_relate}}', 'target_product_id', 'product', 'id', 'CASCADE', 'CASCADE');
		$this->addForeignKey('fk_product_relate_source_product_id', '{{%product_relate}}', 'source_product_id', 'product', 'id', 'CASCADE', 'CASCADE');
		$this->addForeignKey('fk_profile_user_id', '{{%profile}}', 'user_id', 'user', 'id', 'CASCADE', 'CASCADE');
		$this->addForeignKey('fk_rating_product_id', '{{%rating}}', 'product_id', 'product', 'id', 'CASCADE', 'CASCADE');
		$this->addForeignKey('fk_rating_user_id', '{{%rating}}', 'user_id', 'user', 'id', 'CASCADE', 'CASCADE');
		$this->addForeignKey('fk_social_account_user_id', '{{%social_account}}', 'user_id', 'user', 'id', 'CASCADE', 'CASCADE');
		$this->addForeignKey('fk_token_user_id', '{{%token}}', 'user_id', 'user', 'id', 'CASCADE', 'CASCADE');
	}

	public function safeDown() {

		$this->dropForeignKey('fk_bill_user_id', '{{%bill}}');
		$this->dropForeignKey('fk_bill_detail_bill_id', '{{%bill_detail}}');
		$this->dropForeignKey('fk_bill_detail_product_id', '{{%bill_detail}}');
		$this->dropForeignKey('fk_bill_info_bill_id', '{{%bill_info}}');
		$this->dropForeignKey('fk_product_category_id', '{{%product}}');
		$this->dropForeignKey('fk_product_relate_target_product_id', '{{%product_relate}}');
		$this->dropForeignKey('fk_product_relate_source_product_id', '{{%product_relate}}');
		$this->dropForeignKey('fk_profile_user_id', '{{%profile}}');
		$this->dropForeignKey('fk_rating_product_id', '{{%rating}}');
		$this->dropForeignKey('fk_rating_user_id', '{{%rating}}');
		$this->dropForeignKey('fk_social_account_user_id', '{{%social_account}}');
		$this->dropForeignKey('fk_token_user_id', '{{%token}}');
	}
}
