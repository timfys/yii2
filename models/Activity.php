<?php
namespace app\models;
use yii\base\Model;
class Activity extends Model{
    public $title;
    public $description;
    public $date;
    public $time;
    public $isBlocked;
    public $isRepeat;
    public $email;
    public $file;
}