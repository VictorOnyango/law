<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "law".
 *
 * @property int $lawid
 * @property string $lawsection
 * @property string $lawrule
 * @property string $keyword
 */
class Law extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'law';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['lawsection', 'lawrule', 'keyword'], 'required'],
            [['lawsection', 'lawrule', 'keyword'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'lawid' => 'Lawid',
            'lawsection' => 'Lawsection',
            'lawrule' => 'Lawrule',
            'keyword' => 'Keyword',
        ];
    }
}
