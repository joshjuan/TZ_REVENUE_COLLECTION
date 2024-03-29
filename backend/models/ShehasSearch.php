<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Shehas;

/**
 * ShehasSearch represents the model behind the search form of `backend\models\Shehas`.
 */
class ShehasSearch extends Shehas
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'region_id', 'location_id'], 'integer'],
            [['date_time', 'full_names', 'mobile_number'], 'safe'],
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
        $query = Shehas::find();

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
            'date_time' => $this->date_time,
            'region_id' => $this->region_id,
            'location_id' => $this->location_id,
        ]);

        $query->andFilterWhere(['like', 'full_names', $this->full_names])
            ->andFilterWhere(['like', 'mobile_number', $this->mobile_number]);

        return $dataProvider;
    }
}
