<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\SalesTransactions;

/**
 * SalesTransactionsSearch represents the model behind the search form of `backend\models\SalesTransactions`.
 */
class SalesTransactionsSearch extends SalesTransactions
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'client_id', 'zone_id', 'location_id', 'resource_id', 'route_id', 'offence_type_id', 'user_id', 'cancelled_by'], 'integer'],
            [['date_time', 'trans_type', 'weight_type', 'weight', 'plate_number', 'phone_number', 'market_id', 'product_id', 'advertisement_id', 'vehicle_id', 'sheha_id', 'seller_id', 'buyer_id', 'property_id', 'property_type_id', 'receipt_number', 'license_type_id', 'license_number', 'advert_ref_number', 'percentage', 'building_type_id', 'reference_no', 'payer_name', 'cancelled_date_time'], 'safe'],
            [['amount', 'cancelled_amount'], 'number'],
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
        $query = SalesTransactions::find();

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
            'client_id' => $this->client_id,
            'zone_id' => $this->zone_id,
            'location_id' => $this->location_id,
            'resource_id' => $this->resource_id,
            'amount' => $this->amount,
            'route_id' => $this->route_id,
            'offence_type_id' => $this->offence_type_id,
            'user_id' => $this->user_id,
            'cancelled_by' => $this->cancelled_by,
            'cancelled_date_time' => $this->cancelled_date_time,
            'cancelled_amount' => $this->cancelled_amount,
        ]);

        $query->andFilterWhere(['like', 'trans_type', $this->trans_type])
            ->andFilterWhere(['like', 'weight_type', $this->weight_type])
            ->andFilterWhere(['like', 'weight', $this->weight])
            ->andFilterWhere(['like', 'plate_number', $this->plate_number])
            ->andFilterWhere(['like', 'phone_number', $this->phone_number])
            ->andFilterWhere(['like', 'market_id', $this->market_id])
            ->andFilterWhere(['like', 'product_id', $this->product_id])
            ->andFilterWhere(['like', 'advertisement_id', $this->advertisement_id])
            ->andFilterWhere(['like', 'vehicle_id', $this->vehicle_id])
            ->andFilterWhere(['like', 'sheha_id', $this->sheha_id])
            ->andFilterWhere(['like', 'seller_id', $this->seller_id])
            ->andFilterWhere(['like', 'buyer_id', $this->buyer_id])
            ->andFilterWhere(['like', 'property_id', $this->property_id])
            ->andFilterWhere(['like', 'property_type_id', $this->property_type_id])
            ->andFilterWhere(['like', 'receipt_number', $this->receipt_number])
            ->andFilterWhere(['like', 'license_type_id', $this->license_type_id])
            ->andFilterWhere(['like', 'license_number', $this->license_number])
            ->andFilterWhere(['like', 'advert_ref_number', $this->advert_ref_number])
            ->andFilterWhere(['like', 'percentage', $this->percentage])
            ->andFilterWhere(['like', 'building_type_id', $this->building_type_id])
            ->andFilterWhere(['like', 'reference_no', $this->reference_no])
            ->andFilterWhere(['like', 'payer_name', $this->payer_name]);

        return $dataProvider;
    }
}
