<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "RzFeiertage".
 *
 * @property int $FId
 * @property string $Datum
 * @property string $Desc
 */
class RzFeiertage extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'RzFeiertage';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Datum'], 'required'],
            [['Datum'], 'safe'],
            [['Desc'], 'string'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'FId' => Yii::t('app', 'Fid'),
            'Datum' => Yii::t('app', 'Datum'),
            'Desc' => Yii::t('app', 'Desc'),
        ];
    }
}
