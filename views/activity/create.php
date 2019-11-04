<?php
use app\models\Activity;
use yii\widgets\ActiveForm;
use app\controllers\actions\activity\CreateAction;
?>

<div class="row">
    <div class="col-md-8">
        <?php $form=\yii\bootstrap\ActiveForm::begin();
        $model=new Activity;?>
        <?=$form->field($model,'title')->label('ваше имя');?>
        <?=$form->field($model,'date')->label('дата события')->input('date');?>
        <?=$form->field($model,'isBlocked')->label('заблокировано')->checkbox();?>
        <?php \yii\bootstrap\ActiveForm::end();?>
        <button type="submit" class="btn btn-primary">отправка</button>
    </div>
</div>