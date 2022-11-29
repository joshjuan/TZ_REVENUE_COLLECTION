<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\UserLoginDetails;

/**
 * UserLoginDetailsSearch represents the model behind the search form of `backend\models\UserLoginDetails`.
 */
class UserLoginDetailsSearch extends UserLoginDetails
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['login_detail_id', 'login_status'], 'integer'],
            [['login_user_id', 'last_login_at', 'logout_at', 'user_ip_address'], 'safe'],
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
        $query = UserLoginDetails::find();

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
            'login_detail_id' => $this->login_detail_id,
            'login_status' => $this->login_status,
            'last_login_at' => $this->last_login_at,
            'logout_at' => $this->logout_at,
        ]);

        $query->andFilterWhere(['like', 'login_user_id', $this->login_user_id])
            ->andFilterWhere(['like', 'user_ip_address', $this->user_ip_address]);

        return $dataProvider;
    }
}
