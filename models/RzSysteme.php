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
            [['SId', 'System','Description','KontaktIT','KontaktFachlich','Dienstleister', 'KontaktDienstleister', 'DatenschutzvereinbAm', 'externerZugriff', 'Infrastruktur', 'Backups', 
                'Ausfallsicherheit',  'anzahlUser',  'zyklischerSystemarbeitenDurch'], 'safe'],

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
