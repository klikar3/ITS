<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "RzSysteme".
 *
 * @property int $SId
 * @property string $System
 */
class RzSysteme extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'RzSysteme';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['System'], 'required'],
            [['System'], 'string'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'SId' => Yii::t('app', 'Sid'),
            'System' => Yii::t('app', 'System'),
        ];
    }
}
