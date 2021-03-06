<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "RzReport".
 *
 * @property string $Rid
 * @property string $System
 * @property string $von
 * @property string $bis
 * @property string $von_ausw
 * @property string $bis_ausw
 * @property string $Kunde
 * @property string $Betroffen
 * @property string $Standort
 * @property int $Prio
 * @property int $Schwere
 * @property string $Beschreibung
 * @property string $Aktion
 * @property string $Loesung
 * @property int $Wartung
 * @property int $Intern
 * @property string $Author
 * @property string $Korrektor
 * @property int $Freigegeben
 * @property int $Externe_betroffen
 * @property int $SLA_betroffen
 * @property int $Wiedervorlage
 */
class RzReport extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'RzReport';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
//            [['System', 'von', 'bis', 'Kunde'], 'required'],
//            [['System', 'Kunde', 'Betroffen', 'Standort', 'Prio', 'Schwere', 'Beschreibung', 'Aktion', 'Loesung', 'Author', 'Korrektor'], 'string'],
//            [['von', 'bis', 'von_ausw', 'bis_ausw'], 'safe'],
//            [['Wartung', 'Intern', 'Freigegeben', 'Externe_betroffen', 'SLA_betroffen', 'Wiedervorlage'], 'integer'],
      			[['System', 'von', 'bis', 'von_ausw', 'bis_ausw', 'Kunde', 'Standort', 'Betroffen'], 'required', 'on'=>'insert,update'],
      			[['Wartung', 'Intern', 'Wiedervorlage'], 'integer', 'integerOnly'=>true],
      			[['System'], 'string', 'length'=>50],
      			[['Kunde', 'Betroffen', 'Standort'], 'string', 'length'=>4000],
      			[['Beschreibung', 'Aktion', 'Loesung', 'Wartung', 'Intern', 'Freigegeben',
            'Externe_betroffen', 'SLA_betroffen', 'Author', 'Korrektor', 'Wiedervorlage'], 'safe'],
      			// The following rule is used by search().
      			// Please remove those attributes that should not be searched.
      			[['Rid', 'System', 'von', 'bis', 'von_ausw', 'bis_ausw', 'Kunde', 'Betroffen', 'Standort', 'Prio', 'Schwere', 'Beschreibung', 'Aktion', 'Loesung', 'Wartung', 'Intern', 'Freigegeben',
                'Externe_betroffen', 'SLA_betroffen', 'Author', 'Korrektor', 'Wiedervorlage'], 'safe', 'on'=>'search'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'Rid' => Yii::t('app', 'Rid'),
            'System' => Yii::t('app', 'Auslösendes System'),
            'von' => Yii::t('app', 'Beginn der Störung'),
            'bis' => Yii::t('app', 'Ende der Störung'),
            'von_ausw' => Yii::t('app', 'Beginn Auswirkung'),
            'bis_ausw' => Yii::t('app', 'Ende Auswirkung'),
            'Kunde' => Yii::t('app', 'Kunde'),
            'Betroffen' => Yii::t('app', 'Auswirkung auf Dienste'),
            'Standort' => Yii::t('app', 'Standort'),
            'Prio' => Yii::t('app', 'Priorität'),
            'Schwere' => Yii::t('app', 'Schwere'),
            'Beschreibung' => Yii::t('app', 'Beschreibung'),
            'Aktion' => Yii::t('app', 'Aktion'),
            'Loesung' => Yii::t('app', 'Lösung'),
            'Wartung' => Yii::t('app', 'Angekündigte Wartung'),
            'Intern' => Yii::t('app', 'Intern'),
            'Author' => Yii::t('app', 'Erstellt von'),
            'Korrektor' => Yii::t('app', 'Geändert von'),
            'Freigegeben' => Yii::t('app', 'Freigegeben'),
            'Externe_betroffen' => Yii::t('app', 'Externe betr.'),
            'SLA_betroffen' => Yii::t('app', 'SLA betr.'),
            'Wiedervorlage' => Yii::t('app', 'Zur Wiedervorlage'),
        ];
    }
}
