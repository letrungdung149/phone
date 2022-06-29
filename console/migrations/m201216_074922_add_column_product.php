<?php

use yii\db\Migration;

/**
 * Class m201216_074922_add_column_product
 */
class m201216_074922_add_column_product extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
		$this->addColumn('product','sale','INT NOT NULL DEFAULT 0 AFTER type');
		$this->addColumn('product','trend','ENUM("0","1") NOT NULL DEFAULT "0" AFTER type');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m201216_074922_add_column_product cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m201216_074922_add_column_product cannot be reverted.\n";

        return false;
    }
    */
}
