<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "RzKeyUser".
 *
 * @property int $Kid
 * @property string $System
 * @property string $Kunde
 * @property string $Standort
 * @property string $email
 */
class RzKeyUser extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'RzKeyUser';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['System', 'Kunde', 'Standort'], 'required'],
            [['System', 'Kunde', 'Standort', 'email'], 'string'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'Kid' => Yii::t('app', 'Kid'),
            'System' => Yii::t('app', 'System'),
            'Kunde' => Yii::t('app', 'Kunde'),
            'Standort' => Yii::t('app', 'Standort'),
            'email' => Yii::t('app', 'Email'),
        ];
    }
}
