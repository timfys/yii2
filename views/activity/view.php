<?php

  use \app\models\Activity;
  use \yii\web\View;
 
?>
<h1><?=$model->title?></h1>
<?=Yii::getAlias('@app')?>
<br/>
<?php
    $data=['first'=>'one','two'=>['three'=>'value']];
    echo \yii\helpers\ArrayHelper::getValue($data,'firsts','def').'<br/>';
    echo \yii\helpers\ArrayHelper::getValue($data,'two.three');
    $data=[['name'=>'Artem','login'=>'ar','id'=>5],
        ['name'=>'Rasul','id'=>2,'login'=>'ra'],
        ['name'=>'Hrach','id'=>'3','login'=>'Hr']
    ];
    $list=\yii\helpers\ArrayHelper::map($data,'id',function ($arr){
        return \yii\helpers\ArrayHelper::getValue($arr,'name').' '.
            \yii\helpers\ArrayHelper::getValue($arr,'login');
    });
    print_r($list);
?>
<br/>
