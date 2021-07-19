<?php

use yii\db\Migration;

/**
 * Class m210716_053723_model
 */
class m210716_053723_model extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {

        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }
        $this->createTable('{{%models}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string()->notNull(),
            'marka_id' => $this->integer()->notNull(),

        ], $tableOptions);
        $this->createIndex('models_index_1', '{{%models}}', 'marka_id');

        $this->addForeignKey('models_fk_1', '{{%models}}', 'marka_id', '{{%marka}}', 'id', 'cascade', 'cascade');


        $this->insert('{{%models}}', [
            'name' => 'ES',
            'marka_id' => 1
        ]);
        $this->insert('{{%models}}', [
            'name' => 'GX',
            'marka_id' => 1,
        ]);
        $this->insert('{{%models}}', [
            'name' => 'Camry',
            'marka_id' => 2
        ]);
        $this->insert('{{%models}}', [
            'name' => 'Corolla',
            'marka_id' => 2,
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey('models_fk_1', '{{%models}}');
        $this->dropIndex('models_index_1', '{{%models}}');
        $this->dropTable('{{%models}}');

    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m210716_053723_model cannot be reverted.\n";

        return false;
    }
    */
}
