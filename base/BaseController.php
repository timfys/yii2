<?php
namespace app\base;
use Yii;
use yii\web\Controller;
class BaseController extends Controller{
    public function actionCreate(){
        return $this->render('create');
    }
}