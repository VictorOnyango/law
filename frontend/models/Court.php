<?php

namespace frontend\models;

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

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'type', 'Address'], 'required'],
            [['name', 'type', 'Address'], 'string', 'max' => 255],
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
}
