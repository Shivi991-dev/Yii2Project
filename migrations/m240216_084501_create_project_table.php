<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%project}}`.
 */
class m240216_084501_create_project_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%project}}', [
            'id' => $this->primaryKey(),
            'title' => $this->string(),
            'description' => $this->text(),
            'user_id' => $this->integer(),
        ]);
        $this->addForeignKey(
            'fk_user_id', 
            '{{%project}}', 
            'user_id', 
            '{{%users}}', 
            'id'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%project}}');
    }
}
