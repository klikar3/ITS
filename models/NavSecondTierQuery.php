<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[NavSecondTier]].
 *
 * @see NavSecondTier
 */
class NavSecondTierQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * @inheritdoc
     * @return NavSecondTier[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return NavSecondTier|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
