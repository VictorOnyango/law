<?php

namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Criminal;

/**
 * CriminalSearch represents the model behind the search form of `backend\models\Criminal`.
 */
class CriminalSearch extends Criminal
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['criminalid'], 'integer'],
            [['fullname', 'Status', 'image'], 'safe'],
            [['Amount'], 'number'],
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
        $query = Criminal::find();

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
            'criminalid' => $this->criminalid,
            'Amount' => $this->Amount,
        ]);

        $query->andFilterWhere(['like', 'fullname', $this->fullname])
            ->andFilterWhere(['like', 'Status', $this->Status])
            ->andFilterWhere(['like', 'image', $this->image]);

        return $dataProvider;
    }
}
