<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "rzSLAs".
 *
 * @property int $id
 * @property int $system_id
 * @property string $name
 * @property string $description
 *
 * @property RzSysteme $system
 * @property RzSlaZeiten[] $rzSlaZeitens
 */
class RzSLAs extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'rzSLAs';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['system_id', 'name'], 'required'],
            [['system_id'], 'integer'],
            [['name', 'description'], 'string'],
            [['system_id'], 'exist', 'skipOnError' => true, 'targetClass' => RzSysteme::className(), 'targetAttribute' => ['system_id' => 'SId']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'system_id' => Yii::t('app', 'System ID'),
            'name' => Yii::t('app', 'Name'),
            'description' => Yii::t('app', 'Description'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSystem()
    {
        return $this->hasOne(RzSysteme::className(), ['SId' => 'system_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRzSlaZeitens()
    {
        return $this->hasMany(RzSlaZeiten::className(), ['slaId' => 'id']);
    }

    /**
     * @inheritdoc
     * @return RzSLAsQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new RzSLAsQuery(get_called_class());
    }
}
