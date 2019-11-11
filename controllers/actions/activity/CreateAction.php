<?php
namespace app\controllers\actions\activity;
use app\models\Activity;
use app\base\BaseAction;
use yii\bootstrap\ActiveForm;
use yii\web\Response;
class CreateAction extends BaseAction{
    public $name;
    
    public function run(){
        $model=new Activity;
        return $this->controller->render('create',['model'=>$model]);
    }
}