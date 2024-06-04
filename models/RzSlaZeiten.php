<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "rzSlaZeiten".
 *
 * @property int $id
 * @property int $slaId
 * @property string $mandant
 * @property int $wochentag
 * @property string $von
 * @property string $bis
 * @property string $tagesName
 *
 * @property RzSLAs $sla
 */
class RzSlaZeiten extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'rzSlaZeiten';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['slaId', 'mandant', 'wochentag', 'von', 'bis'], 'required'],
            [['slaId', 'wochentag'], 'integer'],
            [['mandant', 'tagesName'], 'string'],
            [['von', 'bis'], 'safe'],
            [['slaId'], 'exist', 'skipOnError' => true, 'targetClass' => RzSLAs::className(), 'targetAttribute' => ['slaId' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'slaId' => Yii::t('app', 'Sla ID'),
            'mandant' => Yii::t('app', 'Mandant'),
            'wochentag' => Yii::t('app', 'Wochentag'),
            'von' => Yii::t('app', 'Von'),
            'bis' => Yii::t('app', 'Bis'),
            'tagesName' => Yii::t('app', 'Tages Name'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSla()
    {
        return $this->hasOne(RzSLAs::className(), ['id' => 'slaId']);
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
