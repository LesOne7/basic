<?php

namespace app\models;

use Yii; 
use yii\db\ActiveRecord;

class FindBookForm extends ActiveRecord
{

    public static function tableName()
    {
        return 'books';
    }

    public function rules()
    {
        return [
            [['title_b'], 'required', 'message' => 'Поле не заполнено'],
            [['title_b'], 'trim'],
         ];
    }
}