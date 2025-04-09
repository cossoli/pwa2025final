<?php

use yii\db\Migration;

class m250409_204709_create__usuario extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%usuario}}', [
            'id' => $this->primaryKey(),
            'nombre' => $this->string(100)->notNull(),
            'apellido' => $this->string(100)->notNull(),
            'password' => $this->string(255)->notNull(),
            'autokey' => $this->integer()->notNull(),
            'accestoken' => $this->integer()->notNull(),
        ]);

        // Add foreign key for table `{{%rol}}`
        $this->addForeignKey(
            '{{%fk-usuario-rol_id}}',
            '{{%usuario}}',
            'rol_id',
            '{{%rol}}',
            'id',
            'CASCADE'
        );

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m250409_204709_create__usuario cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m250409_204709_create__usuario cannot be reverted.\n";

        return false;
    }
    */
}
