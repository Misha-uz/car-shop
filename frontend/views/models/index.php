<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\search\ModelsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */
/* @var $markas \common\models\Marka */

$this->title = 'Models';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="models-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Models', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

//            'id',
            'name',
            [
               'attribute' => 'marka_id',
                'value' => function($model){
                    return $model->marka->name;
                },
                'filter' => $markas
            ],

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
