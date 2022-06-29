<?php

use yii\db\Schema;
use yii\db\Migration;

class m201204_042923_user extends Migration
{
    public function safeUp()
    {
        $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';

        $this->createTable(
            '{{%user}}',
            [
                'id'=> Schema::TYPE_PK.'',
                'username'=> Schema::TYPE_STRING.'(255)',
                'role'=> "enum('administrator','member')".' NOT NULL',
                'email'=> Schema::TYPE_STRING.'(255) NOT NULL',
                'password_hash'=> Schema::TYPE_STRING.'(60)',
                'flags'=> Schema::TYPE_INTEGER.'(11) NOT NULL DEFAULT "0"',
                'auth_key'=> Schema::TYPE_STRING.'(32) NOT NULL',
                'unconfirmed_email'=> Schema::TYPE_STRING.'(255)',
                'registration_ip'=> Schema::TYPE_STRING.'(45)',
                'confirmed_at'=> Schema::TYPE_INTEGER.'(11)',
                'last_login_at'=> Schema::TYPE_INTEGER.'(11)',
                'blocked_at'=> Schema::TYPE_INTEGER.'(11)',
                'created_at'=> Schema::TYPE_INTEGER.'(11) NOT NULL',
                'updated_at'=> Schema::TYPE_INTEGER.'(11) NOT NULL',
                ],
            $tableOptions
        );

        $this->createIndex('user_unique_username', '{{%user}}','username',1);    $this->insert('{{%user}}',['id'=>'1','username'=>'phamhai','role'=>'administrator','email'=>'phamhai@gmail.com','password_hash'=>'$2y$13$x2Fwa7m3GGqiuvc7zvSICO/jSHlEC5KrrvVD8RVVOOrMNN3.0VU4q','flags'=>'0','auth_key'=>'u1R-Mq3EMON3wYY1w5EUgwjMmJfjzFcb','unconfirmed_email'=>'','registration_ip'=>'','confirmed_at'=>'433','last_login_at'=>'1607046866','blocked_at'=>'','created_at'=>'1606440053','updated_at'=>'1606440053']);
$this->insert('{{%user}}',['id'=>'2','username'=>'phamhai_test','role'=>'member','email'=>'mitto.hai.735@gmail.com','password_hash'=>'$2y$13$zEO0jQ1WPd.G.vWs0flyJu9a1u2mIE51eXGKZ376xJaqqoWJapmCO','flags'=>'0','auth_key'=>'3NRaRAsLjHAvn_FBZb_kuWrnCGYKQu1I','unconfirmed_email'=>'','registration_ip'=>'','confirmed_at'=>'','last_login_at'=>'1606443882','blocked_at'=>'','created_at'=>'1606440130','updated_at'=>'1606440130']);
$this->insert('{{%user}}',['id'=>'3','username'=>'NyEbfevcL','role'=>'administrator','email'=>'mitto.hai.7356@gmail.com','password_hash'=>'$2y$10$HapO9FXF83DTfaeZNdEuLeSoCY6kdFwrGNLttVpyqSIp8zpYoHPs.','flags'=>'0','auth_key'=>'TwKW6MO-8YJFl_GTgjnMUzFoGtkteVwn','unconfirmed_email'=>'','registration_ip'=>'127.0.0.1','confirmed_at'=>'1606820707','last_login_at'=>'','blocked_at'=>'','created_at'=>'1606820707','updated_at'=>'1606820707']);
$this->insert('{{%user}}',['id'=>'4','username'=>'jacky735','role'=>'administrator','email'=>'jacky1123@gmail.com','password_hash'=>'$2y$10$p4HGQttRMbnTFEcJna7DsusulPIkb9roARl/76gotsNYPIHNXCn4y','flags'=>'0','auth_key'=>'H-4rZh0bHQAJ3_FKgD7R8sxOBDo0Jlba','unconfirmed_email'=>'','registration_ip'=>'127.0.0.1','confirmed_at'=>'1607046764','last_login_at'=>'','blocked_at'=>'','created_at'=>'1607046764','updated_at'=>'1607046764']);
$this->insert('{{%user}}',['id'=>'5','username'=>'jacky7356','role'=>'administrator','email'=>'jacky735@gmail.com','password_hash'=>'$2y$13$x2Fwa7m3GGqiuvc7zvSICO/jSHlEC5KrrvVD8RVVOOrMNN3.0VU4q','flags'=>'0','auth_key'=>'jr2_WvvxCaohIAFVC8O2CR9Rjp_mWHpk','unconfirmed_email'=>'','registration_ip'=>'127.0.0.1','confirmed_at'=>'1607046799','last_login_at'=>'','blocked_at'=>'','created_at'=>'1607046799','updated_at'=>'1607046799']);

    }

    public function safeDown()
    {
        $this->dropIndex('user_unique_username', '{{%user}}');
        $this->dropTable('{{%user}}');
    }
}
