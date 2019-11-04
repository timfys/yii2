<?php
namespace app\controllers;
use yii\web\Controller;
use app\base\BaseController;
use app\controllers\actions\activity\CreateAction;
class ActivityController extends BaseController{
    
    public function actionCreate(){
      //  return[
     //       'create'=>['class'=>CreateAction::class, 'name'=>'timfy']
     //   ];
        return $this->render('create');
    }
}