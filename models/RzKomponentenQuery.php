<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[RzKomponenten]].
 *
 * @see RzKomponenten
 */
class RzKomponentenQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * @inheritdoc
     * @return RzKomponenten[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return RzKomponenten|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
