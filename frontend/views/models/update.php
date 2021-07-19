<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Models */
/* @var $markas common\models\Marka */


$this->title = 'Update Models: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Models', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="models-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'markas' => $markas,
    ]) ?>

</div>
