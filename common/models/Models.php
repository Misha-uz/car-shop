<?php

namespace common\models;

use Yii;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "models".
 *
 * @property int $id
 * @property string $name
 * @property int $marka_id
 *
 * @property Car[] $cars
 * @property Marka $marka
 */
class Models extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'models';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'marka_id'], 'required'],
            [['marka_id'], 'integer'],
            [['name'], 'string', 'max' => 255],
            [['marka_id'], 'exist', 'skipOnError' => true, 'targetClass' => Marka::className(), 'targetAttribute' => ['marka_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'marka_id' => 'Marka ID',
        ];
    }

    /**
     * Gets query for [[Cars]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCars()
    {
        return $this->hasMany(Car::className(), ['model_id' => 'id']);
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

    public static function modelList(){
        return ArrayHelper::map(Models::find()->all(),'name','name');
    }
}
