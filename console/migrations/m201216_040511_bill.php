<?php

use yii\db\Schema;
use yii\db\Migration;

class m201216_040511_bill extends Migration {

	public function safeUp() {
		$tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
		$this->createTable('{{%bill}}', [
			'id'             => Schema::TYPE_PK . '',
			'user_id'        => Schema::TYPE_INTEGER . '(11)',
			'total_amount'   => Schema::TYPE_DOUBLE . ' NOT NULL DEFAULT "0"',
			'total_quantity' => Schema::TYPE_INTEGER . '(11) NOT NULL DEFAULT "1"',
			'status'         => "enum('pending','completed','draft')" . ' NOT NULL DEFAULT "draft"',
			'created_at'     => Schema::TYPE_INTEGER . '(11)',
			'updated_at'     => Schema::TYPE_INTEGER . '(11)',
		], $tableOptions);
		$this->createIndex('user_id', '{{%bill}}', 'user_id', 0);
	}

	public function safeDown() {
		$this->dropIndex('user_id', '{{%bill}}');
		$this->dropTable('{{%bill}}');
	}
}
