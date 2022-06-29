<?php

use yii\db\Schema;
use yii\db\Migration;

class m201216_040517_product_relate extends Migration {

	public function safeUp() {
		$tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
		$this->createTable('{{%product_relate}}', [
			'id'                => Schema::TYPE_PK . '',
			'source_product_id' => Schema::TYPE_INTEGER . '(11) NOT NULL',
			'target_product_id' => Schema::TYPE_INTEGER . '(11) NOT NULL',
		], $tableOptions);
		$this->createIndex('phone_id', '{{%product_relate}}', 'source_product_id', 0);
		$this->createIndex('accessory_id', '{{%product_relate}}', 'target_product_id', 0);
		$this->insert('{{%product_relate}}', [
			'id'                => '1',
			'source_product_id' => '46446',
			'target_product_id' => '46191',
		]);
	}

	public function safeDown() {
		$this->dropIndex('phone_id', '{{%product_relate}}');
		$this->dropIndex('accessory_id', '{{%product_relate}}');
		$this->dropTable('{{%product_relate}}');
	}
}
