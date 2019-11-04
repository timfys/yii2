<?php
namespace app\controllers\actions\activity;
use app\models\Activity;
use yii\base\Action;
class CreateAction extends Action{
    public $name;
    public function run(){
        $model=new Activity();
        return $this->controller->render('create',['name'=>$this->name, 'model'=>$model]);
    }
}