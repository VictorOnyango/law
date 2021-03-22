<?php

namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Lawyer;

/**
 * LawyerSearch represents the model behind the search form of `backend\models\Lawyer`.
 */
class LawyerSearch extends Lawyer
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['lawyerid'], 'integer'],
            [['name', 'court', 'age', 'qualification', 'expertise'], 'safe'],
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
        $query = Lawyer::find();

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
            'lawyerid' => $this->lawyerid,
        ]);

        $query->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'court', $this->court])
            ->andFilterWhere(['like', 'age', $this->age])
            ->andFilterWhere(['like', 'qualification', $this->qualification])
            ->andFilterWhere(['like', 'expertise', $this->expertise]);

        return $dataProvider;
    }
}
