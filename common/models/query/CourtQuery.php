<?php

namespace common\models\query;

/**
 * This is the ActiveQuery class for [[\frontend\models\Court]].
 *
 * @see \frontend\models\Court
 */
class CourtQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return \frontend\models\Court[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

   
    public function byKeyword($keyword)
    {
        return $this->andWhere("MATCH(lawsection, lawrule)
        AGAINST (:keyword)", ['keyword' => $keyword]);
    }

    /**
     * {@inheritdoc}
     * @return \frontend\models\Court|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
