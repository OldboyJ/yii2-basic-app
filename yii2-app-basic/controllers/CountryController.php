<?php

namespace app\controllers;

use yii\rest\ActiveController;
use app\models\Country;


class CountryController extends ActiveController
{
  public $modelClass = 'app\models\Country';
}
