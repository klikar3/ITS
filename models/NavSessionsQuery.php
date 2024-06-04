<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[NavSessions]].
 *
 * @see NavSessions
 */
class NavSessionsQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * @inheritdoc
     * @return NavSessions[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return NavSessions|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
