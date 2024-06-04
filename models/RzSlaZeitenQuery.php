<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[RzSlaZeiten]].
 *
 * @see RzSlaZeiten
 */
class RzSlaZeitenQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * @inheritdoc
     * @return RzSlaZeiten[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return RzSlaZeiten|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
