<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%status}}`.
 */
class m230101_024752_create_type_status_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%type_status}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string()->notNull(),
            'color' => $this->string()->notNull(),
            'created_at' => $this->dateTime()->notNull(),
            'updated_at' => $this->dateTime()
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%type_status}}');
    }
}
