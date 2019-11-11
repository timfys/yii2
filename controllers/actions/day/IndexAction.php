<?php
namespace app\controllers\actions\day;
use app\base\BaseAction;
use app\models\Day;
class IndexAction extends Action
{
    public function run() {
       $day = new Day();
       \Yii::$app->day->today($day);
        return $this->controller->render('indexDay',['day'=>$day]);
    }
}