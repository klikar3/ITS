<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "rzKomponentTyp".
 *
 * @property int $id
 * @property string $name
 *
 * @property RzKomponenten[] $rzKomponentens
 */
class RzKomponentTyp extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'rzKomponentTyp';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name'], 'string'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'name' => Yii::t('app', 'Name'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRzKomponentens()
    {
        return $this->hasMany(RzKomponenten::className(), ['typ' => 'id']);
    }

    /**
     * @inheritdoc
     * @return RzKomponentTypQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new RzKomponentTypQuery(get_called_class());
    }
}
