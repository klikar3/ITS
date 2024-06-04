<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Gruppe".
 *
 * @property int $gId
 * @property string $Gruppe
 * @property string $Description
 */
class Gruppe extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'Gruppe';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Gruppe'], 'required'],
            [['Gruppe', 'Description'], 'string'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'gId' => Yii::t('app', 'G ID'),
            'Gruppe' => Yii::t('app', 'Gruppe'),
            'Description' => Yii::t('app', 'Description'),
        ];
    }
}
