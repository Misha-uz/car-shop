<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "car".
 *
 * @property int $id
 * @property int $marka_id
 * @property int $model_id
 * @property string $engine_type
 * @property string $drive_type
 *
 * @property Marka $marka
 * @property Models $model
 */
class Car extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'car';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['marka_id', 'model_id', 'engine_type', 'drive_type'], 'required'],
            [['marka_id', 'model_id'], 'integer'],
            [[ 'engine_type', 'drive_type'], 'string'],
            [['marka_id'], 'exist', 'skipOnError' => true, 'targetClass' => Marka::className(), 'targetAttribute' => ['marka_id' => 'id']],
            [['model_id'], 'exist', 'skipOnError' => true, 'targetClass' => Models::className(), 'targetAttribute' => ['model_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'marka_id' => 'Марка',
            'model_id' => 'Модель',
            'engine_type' => 'Тип двигателя',
            'drive_type' => 'Привод',
        ];
    }

    /**
     * Gets query for [[Marka]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getMarka()
    {
        return $this->hasOne(Marka::className(), ['id' => 'marka_id']);
    }

    /**
     * Gets query for [[Model]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getModel()
    {
        return $this->hasOne(Models::className(), ['id' => 'model_id']);
    }
}
