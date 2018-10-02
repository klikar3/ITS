<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "GroupDevices".
 *
 * @property int $gdId
 * @property string $Gruppe
 * @property int $DeviceId
 * @property string $Anteil
 * @property string $DeviceName
 */
class GroupDevices extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'GroupDevices';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Gruppe', 'DeviceName'], 'string'],
            [['DeviceId'], 'required'],
            [['DeviceId'], 'integer'],
            [['Anteil'], 'number'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'gdId' => Yii::t('app', 'Gd ID'),
            'Gruppe' => Yii::t('app', 'Gruppe'),
            'DeviceId' => Yii::t('app', 'Device ID'),
            'Anteil' => Yii::t('app', 'Anteil'),
            'DeviceName' => Yii::t('app', 'Device Name'),
        ];
    }
}
