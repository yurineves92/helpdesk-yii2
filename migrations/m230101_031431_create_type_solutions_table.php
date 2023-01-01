<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%type_solutions}}`.
 */
class m230101_031431_create_type_solutions_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%type_solutions}}', [
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
        $this->dropTable('{{%type_solutions}}');
    }
}
