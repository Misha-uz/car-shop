<?php

use common\models\constants\DriveTypes;
use common\models\constants\EngineTypes;
use common\models\Marka;
use common\models\Models;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $searchModel common\models\search\CarSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */
/* @var $models common\models\Models */
/* @var $markas common\models\Marka */

$this->title = 'Cars';
$this->params['breadcrumbs'][] = $this->title;
?>


<div class="car-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <div class="row">
        <div class="col-md-3">
            <?= $form->field($searchModel, 'marka_id')->dropDownList(Marka::markaList(), ['prompt' => 'Выберите']) ?>
        </div>
        <div class="col-md-3">
            <?= $form->field($searchModel, 'model_id')->dropDownList(Models::modelList(), ['prompt' => 'Выберите']) ?>
        </div>
        <div class="col-md-3">
            <?= $form->field($searchModel, 'engine_type')->dropDownList(EngineTypes::getArray(), ['prompt' => 'Выберите']) ?>
        </div>
        <div class="col-md-3">
            <?= $form->field($searchModel, 'drive_type')->dropDownList(DriveTypes::getList(), ['prompt' => 'Выберите']) ?>
        </div>
    </div>
    <?php ActiveForm::end(); ?>
    <div id="grid_view">
        <?= $this->render('list', ['dataProvider' => $dataProvider]) ?>
    </div>
</div>
