<?php

namespace app\models;
use Yii;
use yii\db\ActiveRecord;

class DeleteAuthorForm extends ActiveRecord
{
	public static function tableName()
	{
		return 'authors';
	}

	public function attributeLabes()
	{
		return[
			'id_a' => 'ID Автора'
		];
	}

	public function rules()
	{
		return [
			[['id_a'], 'required', 'message'=>'Поле не заполнено']
		];
	}
}