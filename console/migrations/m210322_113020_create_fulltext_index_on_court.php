<?php

use yii\db\Migration;

/**
 * Class m210322_113020_create_fulltext_index_on_court
 */
class m210322_113020_create_fulltext_index_on_court extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->execute("ALTER TABLE {{%court}} ADD FULLTEXT(lawsection, lawrule)");
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m210322_113020_create_fulltext_index_on_court cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m210322_113020_create_fulltext_index_on_court cannot be reverted.\n";

        return false;
    }
    */
}
