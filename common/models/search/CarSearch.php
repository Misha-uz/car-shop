<?php

namespace common\models\search;

use common\models\Marka;
use common\models\Models;
use yii\base\BaseObject;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Car;
use yii\helpers\ArrayHelper;

/**
 * CarSearch represents the model behind the search form of `common\models\Car`.
 */
class CarSearch extends Car
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['marka_id', 'model_id', 'engine_type', 'drive_type'], 'string'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query  = Car::find()
            ->joinWith(['marka', 'model'])
            ->orderBy(['id'=>SORT_DESC]);

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            return $dataProvider;
        }
        $query->andFilterWhere(['like', 'car.engine_type', $this->engine_type])
        ->andFilterWhere(['like', 'car.drive_type', $this->drive_type])
        ->andFilterWhere(['like', 'marka.name', $this->marka_id])
        ->andFilterWhere(['like', 'models.name', $this->model_id])
        ->andWhere(['not', ['marka.id' => NULL]])
        ->andWhere(['not', ['models.id' => NULL]]);

        return $dataProvider;
    }
}
