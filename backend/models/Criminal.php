<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "criminal".
 *
 * @property int $criminalid
 * @property string $fullname
 * @property float $Amount
 * @property string $Status
 * @property string $image
 */
class Criminal extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'criminal';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['fullname', 'Amount', 'Status', 'image'], 'required'],
            [['Amount'], 'number'],
            [['fullname', 'Status', 'image'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'criminalid' => 'Criminalid',
            'fullname' => 'Fullname',
            'Amount' => 'Amount',
            'Status' => 'Status',
            'image' => 'Image',
        ];
    }
}
