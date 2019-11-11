<?php
//use app\models\Activity;
//use yii\widgets\ActiveForm;
//use app\controllers\actions\activity\CreateAction;
?>

<div class="row">
    <div class="col-md-8">
        <?php 
        $form=\yii\bootstrap\ActiveForm::begin();?>
        <?=$form->field($model,'title')->label('ваше имя');?>
        <?=$form->field($model,'date')->label('дата события')->input('date');?>
        <?=$form->field($model,'time')->label('время события')->input('time');?>
        <?=$form->field($model,'description')->label('описание события')->textarea();?>
        <?=$form->field($model,'email',['enableClientValidation' => false, 'enableAjaxValidation' => true])->label('ваш e-mail');?>
        <?=$form->field($model,'isBlocked')->label('заблокировано')->checkbox();?>
        <?=$form->field($model,'file')->fileInput()->label('прикрепить файл');?>
        <?php \yii\bootstrap\ActiveForm::end();?>
        <button type="submit" class="btn btn-primary">отправка</button>
    </div>
</div>
