<?php

use yii\db\Schema;
use yii\db\Migration;

class m201216_040519_rating extends Migration {

	public function safeUp() {
		$tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
		$this->createTable('{{%rating}}', [
			'id'         => Schema::TYPE_PK . '',
			'product_id' => Schema::TYPE_INTEGER . '(11)',
			'user_id'    => Schema::TYPE_INTEGER . '(11)',
			'score'      => Schema::TYPE_INTEGER . '(11) NOT NULL DEFAULT "5"',
			'created_at' => Schema::TYPE_INTEGER . '(11)',
			'updated_at' => Schema::TYPE_INTEGER . '(11)',
		], $tableOptions);
		$this->createIndex('item_id', '{{%rating}}', 'product_id', 0);
		$this->createIndex('user_id', '{{%rating}}', 'user_id', 0);
	}

	public function safeDown() {
		$this->dropIndex('item_id', '{{%rating}}');
		$this->dropIndex('user_id', '{{%rating}}');
		$this->dropTable('{{%rating}}');
	}
}
