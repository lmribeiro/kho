<?php

use yii\db\Migration;

/**
 * Class m200831_191308_create_table_experience
 */
class m200831_191308_create_table_experience extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('experience', [
            'id' => $this->primaryKey(),
            'title' => $this->string()->notNull(),
            'company' => $this->string()->notNull(),
            'company_image' => $this->string(),
            'company_url' => $this->string(),
            'location' => $this->string(),
            'description' => $this->text(),
            'start_date' => $this->timestamp()->notNull(),
            'end_date' => $this->timestamp()->null(),
            'current' => $this->tinyInteger(1)->notNull()->defaultValue(0),
            'created_at' => $this->timestamp()->notNull()->defaultExpression('CURRENT_TIMESTAMP'),
            'updated_at' => $this->timestamp()->null()->defaultExpression('CURRENT_TIMESTAMP')->append('ON UPDATE CURRENT_TIMESTAMP'),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('experience');
    }

}
