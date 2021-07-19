<?php

use yii\db\Migration;

/**
 * Class m210716_053713_marka
 */
class m210716_053713_marka extends Migration
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
        $this->createTable('{{%marka}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string()->notNull(),
        ], $tableOptions);

        $this->insert('{{%marka}}', [
            'name' => 'Lexus'
        ]);
        $this->insert('{{%marka}}', [
            'name' => 'Toyota'
        ]);

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%marka}}');
    }


}
