
<?=Html::beginForm(['/car/index',['method' => 'post']])?>
<div class="row">
    <div class="col-md-3">
        <?=Html::dropDownList('marka',$searchModel->marka_id,$markas,['prompt' => 'Выберите','id' => 'marka_id', 'class' => 'form-control'])?>
    </div>
    <div class="col-md-3">
        <?=Html::dropDownList('model',$searchModel->marka_id,$models,['prompt' => 'Выберите','id'=>'model_id','class' => 'form-control'])?>
    </div>
    <div class="col-md-3">
        <?=Html::dropDownList('engine_types',$engine,EngineTypes::getList(),['prompt' => 'Выберите','id' =>'engine','class' => 'form-control'])?>
    </div>
    <div class="col-md-3">
        <?=Html::dropDownList('drive_types',$drive,DriveTypes::getList(),['prompt' => 'Выберите','id' =>'drive','class' => 'form-control'])?>
    </div>
</div>
<?=Html::endForm()?>