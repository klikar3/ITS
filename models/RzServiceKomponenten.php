<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "rzServiceKomponenten".
 *
 * @property int $id
 * @property int $serviceId
 * @property int $komponentId
 *
 * @property RzSysteme $service
 * @property RzKomponenten $id0
 */
class RzServiceKomponenten extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'rzServiceKomponenten';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['serviceId'], 'required'],
            [['serviceId'], 'string'],
            [['komponentId'], 'integer'],
            [['serviceId'], 'exist', 'skipOnError' => true, 'targetClass' => RzSysteme::className(), 'targetAttribute' => ['serviceId' => 'SId']],
            [['id'], 'exist', 'skipOnError' => true, 'targetClass' => RzKomponenten::className(), 'targetAttribute' => ['id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'serviceId' => Yii::t('app', 'Service ID'),
            'komponentId' => Yii::t('app', 'Komponent ID'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getService()
    {
        return $this->hasOne(RzSysteme::className(), ['SId' => 'serviceId']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getKomponente()
    {
        return $this->hasOne(RzKomponenten::className(), ['id' => 'id']);
    }

    /**
     * @inheritdoc
     * @return RzServiceKomponentenQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new RzServiceKomponentenQuery(get_called_class());
    }
}
