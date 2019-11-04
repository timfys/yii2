<?php
namespace app\models;
use yii\base\Model;
class Activity extends Model{
    public $title;
    public $description;
    public $date;
    public $isBlocked;
    public $isRepeat;
}