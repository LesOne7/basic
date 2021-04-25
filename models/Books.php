<?php
namespace app\models;
use yii\db\ActiveRecord;
use app\models\Genres;
use app\models\Authors;

class Books extends ActiveRecord
{
    public function getGenres()
    {
        return $this->hasOne(Genres::className(), ['id_g' => 'FK_id_g']);
    }

    public function getAuthors()
    {
        return $this->hasOne(Authors::className(), ['id_a' => 'FK_id_a']);
    }
}


?>