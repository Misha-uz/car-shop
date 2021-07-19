<?php

use common\models\constants\DriveTypes;
use common\models\constants\EngineTypes;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Car */
/* @var $form yii\widgets\ActiveForm */
/* @var $models common\models\Models */
/* @var $markas common\models\Marka */

?>

<div class="car-form">

    <?php $form = ActiveForm::begin(); ?>
    <div class="row">

        <div class="col-md-6">
            <?= $form->field($model, 'marka_id')->dropDownList($markas,['prompt' =>'Выберите ']) ?>

            <?= $form->field($model, 'model_id')->dropDownList($models,['prompt' =>'Выберите ']) ?>

        </div>
        <div class="col-md-6">
            <?= $form->field($model, 'engine_type')->dropDownList(EngineTypes::getList()) ?>

            <?= $form->field($model, 'drive_type')->dropDownList(DriveTypes::getList()) ?>
        </div>

    </div>
    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
