<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "genres".
 *
 * @property int $id_g
 * @property string $nameofg
 *
 * @property Books[] $books
 */
class Genres extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'genres';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nameofg'], 'required'],
            [['nameofg'], 'string', 'max' => 25],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_g' => 'Id Жанра',
            'nameofg' => 'Название жанра',
        ];
    }

    /**
     * Gets query for [[Books]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getBooks()
    {
        return $this->hasMany(Books::className(), ['FK_id_g' => 'id_g']);
    }
}
