<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "RZKunden".
 *
 * @property int $KId
 * @property string $Kunde
 */
class RZKunden extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'RZKunden';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Kunde'], 'required'],
            [['Kunde'], 'string'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'KId' => Yii::t('app', 'Kid'),
            'Kunde' => Yii::t('app', 'Kunde'),
        ];
    }
}
