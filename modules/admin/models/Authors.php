<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "authors".
 *
 * @property int $id_a
 * @property string $name_a
 * @property string $dateofbirth
 *
 * @property Books[] $books
 */
class Authors extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'authors';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name_a', 'dateofbirth'], 'required'],
            [['dateofbirth'], 'safe'],
            [['name_a'], 'string', 'max' => 25],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_a' => 'Id Автора',
            'name_a' => 'Имя автора',
            'dateofbirth' => 'Дата рождения',
        ];
    }

    /**
     * Gets query for [[Books]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getBooks()
    {
        return $this->hasMany(Books::className(), ['FK_id_a' => 'id_a']);
    }
}
