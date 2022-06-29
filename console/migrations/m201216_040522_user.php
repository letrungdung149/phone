<?php

use yii\db\Schema;
use yii\db\Migration;

class m201216_040522_user extends Migration {

	public function safeUp() {
		$tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
		$this->createTable('{{%user}}', [
			'id'                => Schema::TYPE_PK . '',
			'username'          => Schema::TYPE_STRING . '(255)',
			'role'              => "enum('administrator','member')" . ' NOT NULL',
			'email'             => Schema::TYPE_STRING . '(255) NOT NULL',
			'password_hash'     => Schema::TYPE_STRING . '(60)',
			'flags'             => Schema::TYPE_INTEGER . '(11) NOT NULL DEFAULT "0"',
			'auth_key'          => Schema::TYPE_STRING . '(32) NOT NULL',
			'unconfirmed_email' => Schema::TYPE_STRING . '(255)',
			'registration_ip'   => Schema::TYPE_STRING . '(45)',
			'confirmed_at'      => Schema::TYPE_INTEGER . '(11)',
			'last_login_at'     => Schema::TYPE_INTEGER . '(11)',
			'blocked_at'        => Schema::TYPE_INTEGER . '(11)',
			'created_at'        => Schema::TYPE_INTEGER . '(11) NOT NULL',
			'updated_at'        => Schema::TYPE_INTEGER . '(11) NOT NULL',
		], $tableOptions);
		$this->createIndex('user_unique_username', '{{%user}}', 'username', 1);
		$this->insert('{{%user}}', [
			'id'                => '1',
			'username'          => 'phamhai',
			'role'              => 'administrator',
			'email'             => 'phamhai@gmail.com',
			'password_hash'     => '$2y$13$x2Fwa7m3GGqiuvc7zvSICO/jSHlEC5KrrvVD8RVVOOrMNN3.0VU4q',
			'flags'             => '0',
			'auth_key'          => 'u1R-Mq3EMON3wYY1w5EUgwjMmJfjzFcb',
			'unconfirmed_email' => '',
			'registration_ip'   => '',
			'confirmed_at'      => '1',
			'last_login_at'     => '1608087051',
			'blocked_at'        => '',
			'created_at'        => '1606440053',
			'updated_at'        => '1606440053',
		]);
		$this->insert('{{%user}}', [
			'id'                => '2',
			'username'          => 'phamhai_test',
			'role'              => 'member',
			'email'             => 'mitto.hai.735@gmail.com',
			'password_hash'     => '$2y$13$zEO0jQ1WPd.G.vWs0flyJu9a1u2mIE51eXGKZ376xJaqqoWJapmCO',
			'flags'             => '0',
			'auth_key'          => '3NRaRAsLjHAvn_FBZb_kuWrnCGYKQu1I',
			'unconfirmed_email' => '',
			'registration_ip'   => '',
			'confirmed_at'      => '1',
			'last_login_at'     => '1606443882',
			'blocked_at'        => '',
			'created_at'        => '1606440130',
			'updated_at'        => '1606440130',
		]);
		$this->insert('{{%user}}', [
			'id'                => '3',
			'username'          => 'phuong17889',
			'role'              => 'administrator',
			'email'             => 'phuong17889@gmail.com',
			'password_hash'     => '$2y$10$7X1GAPEOpR1.oren0HZJWe2fcXvA57fU8.SRDZfSe1rUeo6wBLl9u',
			'flags'             => '0',
			'auth_key'          => 'FxwhBCp2maBcMWZhAHgbC2dr5W9QhfXe',
			'unconfirmed_email' => '',
			'registration_ip'   => '127.0.0.1',
			'confirmed_at'      => '',
			'last_login_at'     => '',
			'blocked_at'        => '',
			'created_at'        => '1607053598',
			'updated_at'        => '1607053598',
		]);
	}

	public function safeDown() {
		$this->dropIndex('user_unique_username', '{{%user}}');
		$this->dropTable('{{%user}}');
	}
}
