<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "RzKernzeiten".
 *
 * @property int $zId
 * @property string $Mandant
 * @property int $Wochentag
 * @property string $Kernzeit_von
 * @property string $Kernzeit_bis
 * @property string $Tagesname
 */
class RzKernzeiten extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'RzKernzeiten';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Mandant', 'Wochentag', 'Kernzeit_von', 'Kernzeit_bis'], 'required'],
            [['Mandant', 'Tagesname'], 'string'],
            [['Wochentag'], 'integer'],
            [['Kernzeit_von', 'Kernzeit_bis'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'zId' => Yii::t('app', 'Z ID'),
            'Mandant' => Yii::t('app', 'Mandant'),
            'Wochentag' => Yii::t('app', 'Wochentag'),
            'Kernzeit_von' => Yii::t('app', 'Kernzeit Von'),
            'Kernzeit_bis' => Yii::t('app', 'Kernzeit Bis'),
            'Tagesname' => Yii::t('app', 'Tagesname'),
        ];
    }
}
