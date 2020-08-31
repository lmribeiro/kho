<?php

use yii\db\Migration;

/**
 * Class m200831_190614_create_table_education
 */
class m200831_190614_create_table_education extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('education', [
            'id' => $this->primaryKey(),
            'school' => $this->string()->notNull(),
            'school_image' => $this->string(),
            'school_url' => $this->string(),
            'degree' => $this->string()->notNull(),
            'description' => $this->text(),
            'start_year' => $this->string(4),
            'end_year' => $this->string(4),
            'grade' => $this->integer(),
            'created_at' => $this->timestamp()->notNull()->defaultExpression('CURRENT_TIMESTAMP'),
            'updated_at' => $this->timestamp()->null()->defaultExpression('CURRENT_TIMESTAMP')->append('ON UPDATE CURRENT_TIMESTAMP'),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('education');
    }
}
