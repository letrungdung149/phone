<?php

use yii\db\Schema;
use yii\db\Migration;

class m201216_040518_profile extends Migration {

	public function safeUp() {
		$tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
		$this->createTable('{{%profile}}', [
			'id'             => Schema::TYPE_PK . '',
			'user_id'        => Schema::TYPE_INTEGER . '(11) NOT NULL',
			'name'           => Schema::TYPE_STRING . '(255)',
			'public_email'   => Schema::TYPE_STRING . '(255)',
			'gravatar_email' => Schema::TYPE_STRING . '(255)',
			'gravatar_id'    => Schema::TYPE_STRING . '(32)',
			'location'       => Schema::TYPE_STRING . '(255)',
			'website'        => Schema::TYPE_STRING . '(255)',
			'bio'            => Schema::TYPE_TEXT . '',
			'timezone'       => Schema::TYPE_STRING . '(40)',
		], $tableOptions);
		$this->createIndex('user_id', '{{%profile}}', 'user_id', 0);
		$this->insert('{{%profile}}', [
			'id'             => '1',
			'user_id'        => '1',
			'name'           => 'Le Hong Phuong',
			'public_email'   => 'phuong17889@gmail.com',
			'gravatar_email' => 'phuong17889@gmail.com',
			'gravatar_id'    => '',
			'location'       => '',
			'website'        => 'http://xvideos.com',
			'bio'            => '',
			'timezone'       => 'Pacific/Apia',
		]);
	}

	public function safeDown() {
		$this->dropIndex('user_id', '{{%profile}}');
		$this->dropTable('{{%profile}}');
	}
}
