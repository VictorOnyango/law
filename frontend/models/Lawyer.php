<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "lawyer".
 *
 * @property int $lawyerid
 * @property string $name
 * @property string $court
 * @property string $age
 * @property string $qualification
 * @property string $expertise
 */
class Lawyer extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'lawyer';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'court', 'age', 'qualification', 'expertise'], 'required'],
            [['name', 'age', 'qualification', 'expertise'], 'string', 'max' => 255],
            [['court'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'lawyerid' => 'Lawyerid',
            'name' => 'Name',
            'court' => 'Court',
            'age' => 'Age',
            'qualification' => 'Qualification',
            'expertise' => 'Expertise',
        ];
    }
}
