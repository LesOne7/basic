<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "books".
 *
 * @property int $id_b
 * @property string $title_b
 * @property string $dateofpublication
 * @property int|null $FK_id_g
 * @property int|null $FK_id_a
 *
 * @property Authors $fKIdA
 * @property Genres $fKIdG
 */
class Books extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'books';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title_b', 'dateofpublication'], 'required'],
            [['FK_id_g', 'FK_id_a'], 'integer'],
            [['title_b'], 'string', 'max' => 35],
            [['dateofpublication'], 'string', 'max' => 7],
            [['FK_id_a'], 'exist', 'skipOnError' => true, 'targetClass' => Authors::className(), 'targetAttribute' => ['FK_id_a' => 'id_a']],
            [['FK_id_g'], 'exist', 'skipOnError' => true, 'targetClass' => Genres::className(), 'targetAttribute' => ['FK_id_g' => 'id_g']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_b' => 'Id Книги',
            'title_b' => 'Название книги',
            'dateofpublication' => 'Дата публикации',
            'FK_id_g' => 'Жанр',
            'FK_id_a' => 'Автор',
        ];
    }

    /**
     * Gets query for [[FKIdA]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getAuthors()
    {
        return $this->hasOne(Authors::className(), ['id_a' => 'FK_id_a']);
    }

    /**
     * Gets query for [[FKIdG]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getGenres()
    {
        return $this->hasOne(Genres::className(), ['id_g' => 'FK_id_g']);
    }
}
