<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "RzStandorte".
 *
 * @property int $SId
 * @property string $Standort
 */
class RzStandorte extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'RzStandorte';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Standort'], 'required'],
            [['Standort'], 'string'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'SId' => Yii::t('app', 'Sid'),
            'Standort' => Yii::t('app', 'Standort'),
        ];
    }
}
