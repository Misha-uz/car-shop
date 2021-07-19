<?php

use common\models\constants\DriveTypes;
use common\models\constants\EngineTypes;
use yii\db\Migration;

/**
 * Class m210716_053730_car
 */
class m210716_053730_car extends Migration
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
        $this->createTable('{{%car}}', [
            'id' => $this->primaryKey(),
            'marka_id' => $this->integer()->notNull(),
            'model_id' => $this->integer()->notNull(),
            'engine_type' => $this->string()->notNull(),
            'drive_type' => $this->string()->notNull(),

        ], $tableOptions);
        $this->createIndex('car_index_1', '{{%car}}', 'marka_id');

        $this->addForeignKey('car_fk_1', '{{%car}}', 'marka_id', '{{%marka}}', 'id', 'cascade', 'cascade');

        $this->createIndex('car_index_2', '{{%car}}', 'model_id');

        $this->addForeignKey('car_fk_2', '{{%car}}', 'model_id', '{{%models}}', 'id', 'cascade', 'cascade');
        $this->insert('{{%car}}', [
            'marka_id' => 1,
            'model_id' => 1,
            'engine_type' => EngineTypes::STATUS_DIESEL,
            'drive_type' => DriveTypes::STATUS_FRONT
        ]);
        $this->insert('{{%car}}', [
            'marka_id' => 1,
            'model_id' => 1,
            'engine_type' => EngineTypes::STATUS_HYBRID,
            'drive_type' => DriveTypes::STATUS_FRONT
        ]);
        $this->insert('{{%car}}', [
            'marka_id' => 1,
            'model_id' => 1,
            'engine_type' => EngineTypes::STATUS_DIESEL,
            'drive_type' => DriveTypes::STATUS_FRONT
        ]);
        $this->insert('{{%car}}', [
            'marka_id' => 1,
            'model_id' => 1,
            'engine_type' => EngineTypes::STATUS_DIESEL,
            'drive_type' => DriveTypes::STATUS_FULL
        ]);
        $this->insert('{{%car}}', [
            'marka_id' => 1,
            'model_id' => 1,
            'engine_type' => EngineTypes::STATUS_HYBRID,
            'drive_type' => DriveTypes::STATUS_FULL
        ]);
        $this->insert('{{%car}}', [
            'marka_id' => 1,
            'model_id' => 1,
            'engine_type' => EngineTypes::STATUS_DIESEL,
            'drive_type' => DriveTypes::STATUS_FULL
        ]);
        $this->insert('{{%car}}', [
            'marka_id' => 1,
            'model_id' => 2,
            'engine_type' => EngineTypes::STATUS_DIESEL,
            'drive_type' => DriveTypes::STATUS_FRONT
        ]);
        $this->insert('{{%car}}', [
            'marka_id' => 1,
            'model_id' => 2,
            'engine_type' => EngineTypes::STATUS_HYBRID,
            'drive_type' => DriveTypes::STATUS_FRONT
        ]);
        $this->insert('{{%car}}', [
            'marka_id' => 1,
            'model_id' => 3,
            'engine_type' => EngineTypes::STATUS_DIESEL,
            'drive_type' => DriveTypes::STATUS_FRONT
        ]);
        $this->insert('{{%car}}', [
            'marka_id' => 1,
            'model_id' => 3,
            'engine_type' => EngineTypes::STATUS_DIESEL,
            'drive_type' => DriveTypes::STATUS_FULL
        ]);
        $this->insert('{{%car}}', [
            'marka_id' => 1,
            'model_id' => 4,
            'engine_type' => EngineTypes::STATUS_HYBRID,
            'drive_type' => DriveTypes::STATUS_FULL
        ]);
        $this->insert('{{%car}}', [
            'marka_id' => 1,
            'model_id' => 4,
            'engine_type' => EngineTypes::STATUS_DIESEL,
            'drive_type' => DriveTypes::STATUS_FULL
        ]);

        $this->insert('{{%car}}', [
            'marka_id' => 2,
            'model_id' => 1,
            'engine_type' => EngineTypes::STATUS_PETROL,
            'drive_type' => DriveTypes::STATUS_FRONT
        ]);
        $this->insert('{{%car}}', [
            'marka_id' => 2,
            'model_id' => 1,
            'engine_type' => EngineTypes::STATUS_HYBRID,
            'drive_type' => DriveTypes::STATUS_FRONT
        ]);
        $this->insert('{{%car}}', [
            'marka_id' => 2,
            'model_id' => 1,
            'engine_type' => EngineTypes::STATUS_PETROL,
            'drive_type' => DriveTypes::STATUS_FRONT
        ]);
        $this->insert('{{%car}}', [
            'marka_id' => 2,
            'model_id' => 1,
            'engine_type' => EngineTypes::STATUS_PETROL,
            'drive_type' => DriveTypes::STATUS_FULL
        ]);
        $this->insert('{{%car}}', [
            'marka_id' => 2,
            'model_id' => 1,
            'engine_type' => EngineTypes::STATUS_HYBRID,
            'drive_type' => DriveTypes::STATUS_FULL
        ]);
        $this->insert('{{%car}}', [
            'marka_id' => 2,
            'model_id' => 1,
            'engine_type' => EngineTypes::STATUS_PETROL,
            'drive_type' => DriveTypes::STATUS_FULL
        ]);
        $this->insert('{{%car}}', [
            'marka_id' => 2,
            'model_id' => 2,
            'engine_type' => EngineTypes::STATUS_PETROL,
            'drive_type' => DriveTypes::STATUS_FRONT
        ]);
        $this->insert('{{%car}}', [
            'marka_id' => 2,
            'model_id' => 2,
            'engine_type' => EngineTypes::STATUS_HYBRID,
            'drive_type' => DriveTypes::STATUS_FRONT
        ]);
        $this->insert('{{%car}}', [
            'marka_id' => 2,
            'model_id' => 3,
            'engine_type' => EngineTypes::STATUS_PETROL,
            'drive_type' => DriveTypes::STATUS_FRONT
        ]);
        $this->insert('{{%car}}', [
            'marka_id' => 2,
            'model_id' => 3,
            'engine_type' => EngineTypes::STATUS_PETROL,
            'drive_type' => DriveTypes::STATUS_FULL
        ]);
        $this->insert('{{%car}}', [
            'marka_id' => 2,
            'model_id' => 4,
            'engine_type' => EngineTypes::STATUS_HYBRID,
            'drive_type' => DriveTypes::STATUS_FULL
        ]);
        $this->insert('{{%car}}', [
            'marka_id' => 2,
            'model_id' => 4,
            'engine_type' => EngineTypes::STATUS_PETROL,
            'drive_type' => DriveTypes::STATUS_FULL
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey('car_fk_1', '{{%car}}');
        $this->dropIndex('car_index_1', '{{%car}}');
        $this->dropForeignKey('car_fk_2', '{{%car}}');
        $this->dropIndex('car_index_2', '{{%car}}');
        $this->dropTable('{{%car}}');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m210716_053730_car cannot be reverted.\n";

        return false;
    }
    */
}
