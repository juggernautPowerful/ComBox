<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[ContractsType]].
 *
 * @see ContractsType
 */
class ContractsTypeQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * @inheritdoc
     * @return ContractsType[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return ContractsType|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
