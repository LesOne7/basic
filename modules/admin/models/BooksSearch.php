<?php

namespace app\modules\admin\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\modules\admin\models\Books;

/**
 * BooksSearch represents the model behind the search form of `app\modules\admin\models\Books`.
 */
class BooksSearch extends Books
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_b', 'FK_id_g', 'FK_id_a'], 'integer'],
            [['title_b', 'dateofpublication'], 'safe'],
            [['title_b', 'dateofpublication'], 'trim'],

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
        $query = Books::find()->with('authors', 'genres');

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
            'id_b' => $this->id_b,
            'FK_id_g' => $this->FK_id_g,
            'FK_id_a' => $this->FK_id_a,
        ]);

        $query->andFilterWhere(['like', 'title_b', $this->title_b])
            ->andFilterWhere(['like', 'dateofpublication', $this->dateofpublication]);

        return $dataProvider;
    }
}
