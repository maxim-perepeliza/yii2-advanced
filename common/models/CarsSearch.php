<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Cars;

/**
 * CarsSearch represents the model behind the search form of `common\models\Cars`.
 */
class CarsSearch extends Cars
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'count_doors', 'count_seats', 'body_type_id', 'category_id', 'model_id', 'count_cars', 'amount_deposit', 'image_id', 'deleted'], 'integer'],
            [['mark', 'date_release', 'transmition', 'engine_capacity', 'fuel_type', 'engine_power', 'fuel_consumption', 'conditioner_available', 'date_create', 'date_create_utc'], 'safe'],
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
        $query = Cars::find();

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
            'date_release' => $this->date_release,
            'count_doors' => $this->count_doors,
            'count_seats' => $this->count_seats,
            'body_type_id' => $this->body_type_id,
            'category_id' => $this->category_id,
            'model_id' => $this->model_id,
            'count_cars' => $this->count_cars,
            'amount_deposit' => $this->amount_deposit,
            'image_id' => $this->image_id,
            'date_create' => $this->date_create,
            'date_create_utc' => $this->date_create_utc,
            'deleted' => $this->deleted,
        ]);

        $query->andFilterWhere(['like', 'mark', $this->mark])
            ->andFilterWhere(['like', 'transmition', $this->transmition])
            ->andFilterWhere(['like', 'engine_capacity', $this->engine_capacity])
            ->andFilterWhere(['like', 'fuel_type', $this->fuel_type])
            ->andFilterWhere(['like', 'engine_power', $this->engine_power])
            ->andFilterWhere(['like', 'fuel_consumption', $this->fuel_consumption])
            ->andFilterWhere(['like', 'conditioner_available', $this->conditioner_available]);

        return $dataProvider;
    }
}
