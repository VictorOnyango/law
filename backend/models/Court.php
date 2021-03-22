<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "court".
 *
 * @property int $courtid
 * @property string $name
 * @property string $type
 * @property string $Address
 */
class Court extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'court';
    }

    public $globalSearch;

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'type', 'Address'], 'required'],
            [['name','globalSearch', 'type', 'Address'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'courtid' => 'Courtid',
            'name' => 'Name',
            'type' => 'Type',
            'Address' => 'Address',
        ];
    }

    public function search($params)
    {
        $query = Court::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        if(!($this->load($params) && $this->validate())) {
            return $dataProvider;
        }

        $query->andFilterwhere(['like', 'name', $this->globalSearch])
            ->andFilterwhere(['like', 'type', $this->globalSearch]);

        return  $dataProvider;
    }
}
