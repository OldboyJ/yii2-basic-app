<?php

namespace app\models;

use yii\db\ActiveRecord;

class Country extends ActiveRecord
{
  public static function tableName()
  {
      return 'country';
  }

  public function rules()
  {
      return [
        [['code', 'name', 'population'], 'required'],
        [['code'], 'string', 'max' => 3],
        [['name'], 'string', 'max' => 255],
        [['population'], 'integer'],
      ];
  }
}
