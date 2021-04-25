<?php

namespace app\modules\admin\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\modules\admin\models\Genres;

/**
 * GenresSearch represents the model behind the search form of `app\modules\admin\models\Genres`.
 */
class GenresSearch extends Genres
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_g'], 'integer'],
            [['nameofg'], 'safe'],
            [['nameofg'], 'trim'],

        ];
    }

    /**
     * {@inheritdoc}
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Genres::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
            'pagination' => [
                'pageSize' => 5,
            ]
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id_g' => $this->id_g,
        ]);

        $query->andFilterWhere(['like', 'nameofg', $this->nameofg]);

        return $dataProvider;
    }
}
