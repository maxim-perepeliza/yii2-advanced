<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Advert;

/**
 * AdvertSearch represents the model behind the search form of `common\models\Advert`.
 */
class AdvertSearch extends Advert
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'car_id', 'author_id', 'title', 'price_per_hour', 'deleted'], 'integer'],
            [['status', 'date_create', 'date_create_utc', 'date_modified', 'description'], 'safe'],
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
        $query = Advert::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'car_id' => $this->car_id,
            'author_id' => $this->author_id,
            'date_create' => $this->date_create,
            'date_create_utc' => $this->date_create_utc,
            'date_modified' => $this->date_modified,
            'title' => $this->title,
            'price_per_hour' => $this->price_per_hour,
            'deleted' => $this->deleted,
        ]);

        $query->andFilterWhere(['like', 'status', $this->status])
            ->andFilterWhere(['like', 'description', $this->description]);

        return $dataProvider;
    }
}
