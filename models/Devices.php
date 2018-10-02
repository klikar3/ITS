<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Devices".
 *
 * @property int $dId
 * @property string $Device
 * @property int $DeviceId
 */
class Devices extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'Devices';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Device', 'DeviceId'], 'required'],
            [['Device'], 'string'],
            [['DeviceId'], 'integer'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'dId' => Yii::t('app', 'D ID'),
            'Device' => Yii::t('app', 'Device'),
            'DeviceId' => Yii::t('app', 'Device ID'),
        ];
    }
}
