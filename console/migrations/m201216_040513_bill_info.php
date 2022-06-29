<?php

use yii\db\Schema;
use yii\db\Migration;

class m201216_040513_bill_info extends Migration {

	public function safeUp() {
		$tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
		$this->createTable('{{%bill_info}}', [
			'id'           => Schema::TYPE_PK . '',
			'bill_id'      => Schema::TYPE_INTEGER . '(11)',
			'first_name'   => Schema::TYPE_STRING . '(255) NOT NULL',
			'last_name'    => Schema::TYPE_STRING . '(255) NOT NULL',
			'company_name' => Schema::TYPE_STRING . '(255)',
			'email'        => Schema::TYPE_STRING . '(255) NOT NULL',
			'phone'        => Schema::TYPE_STRING . '(255)',
			'address'      => Schema::TYPE_STRING . '(255)',
			'city'         => Schema::TYPE_STRING . '(255)',
			'country'      => Schema::TYPE_STRING . '(255)',
			'postcode'     => Schema::TYPE_STRING . '(255)',
			'created_at'   => Schema::TYPE_INTEGER . '(11)',
			'updated_at'   => Schema::TYPE_INTEGER . '(11)',
		], $tableOptions);
		$this->createIndex('foreign key', '{{%bill_info}}', 'bill_id', 0);
	}

	public function safeDown() {
		$this->dropIndex('foreign key', '{{%bill_info}}');
		$this->dropTable('{{%bill_info}}');
	}
}
