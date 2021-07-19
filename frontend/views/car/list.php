<?php

use common\models\constants\DriveTypes;
use common\models\constants\EngineTypes;
use yii\grid\GridView;
/* @var $dataProvider yii\data\ActiveDataProvider */

echo GridView::widget([
    'dataProvider' => $dataProvider,
    'columns' => [
        ['class' => 'yii\grid\SerialColumn'],

//            'id',
        [
            'attribute' => 'marka_id',
            'value' => function ($model) {
                return $model->marka->name;
            },
        ],
        [
            'attribute' => 'model_id',
            'value' => function ($model) {
                return $model->model->name;
            },
        ],
        [
            'attribute' => 'engine_type',
            'value' => function ($model) {
                return EngineTypes::getString($model->engine_type);
            },
        ],
        [
            'attribute' => 'drive_type',
            'value' => function ($model) {
                return DriveTypes::getString($model->drive_type);
            },
        ],

            ['class' => 'yii\grid\ActionColumn'],
    ],
]);
