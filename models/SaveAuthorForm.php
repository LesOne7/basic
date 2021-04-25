<?php

namespace app\models;
use Yii;
use yii\db\ActiveRecord;

// class SaveAuthorForm extends Model
// {
// 	public $name_a;

// 	public function rules()
// 	{
// 		return [ 
// 			[['name_a'], 'required', 'message' => 'Поле не заполнено']
// 		];
// 	}
// }

class SaveAuthorForm extends ActiveRecord
{

	public static function tableName()
	{
		return 'authors';
	}

	public function attributeLabels()
	{
		return [
			'name_a' => 'Имя',
			'dateofbirth' => 'Дата рождения',
		];
	}

	public function rules()
	{
		return [ 
			[['name_a', 'dateofbirth'], 'required', 'message' => 'Поле не заполнено'],
			[['dateofbirth'], 'date', 'format'=>'yyyy.mm.dd', 'message'=>'Формат даты неправильный']
		];
	}
}
?>