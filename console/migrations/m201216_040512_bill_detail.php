<?php

use yii\db\Schema;
use yii\db\Migration;

class m201216_040512_bill_detail extends Migration {

	public function safeUp() {
		$tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
		$this->createTable('{{%bill_detail}}', [
			'id'         => Schema::TYPE_PK . '',
			'bill_id'    => Schema::TYPE_INTEGER . '(11)',
			'product_id' => Schema::TYPE_INTEGER . '(11)',
			'price'      => Schema::TYPE_DOUBLE . ' NOT NULL DEFAULT "0"',
			'quantity'   => Schema::TYPE_INTEGER . '(11) NOT NULL DEFAULT "1"',
			'amount'     => Schema::TYPE_DOUBLE . ' NOT NULL DEFAULT "0"',
			'created_at' => Schema::TYPE_INTEGER . '(11)',
			'updated_at' => Schema::TYPE_INTEGER . '(11)',
		], $tableOptions);
		$this->createIndex('bill_id', '{{%bill_detail}}', 'bill_id', 0);
		$this->createIndex('item_id', '{{%bill_detail}}', 'product_id', 0);
	}

	public function safeDown() {
		$this->dropIndex('bill_id', '{{%bill_detail}}');
		$this->dropIndex('item_id', '{{%bill_detail}}');
		$this->dropTable('{{%bill_detail}}');
	}
}
