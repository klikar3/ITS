<?php

namespace app\models;

use Yii;
//use yii\behaviors\AttributeTypecastBehavior;
use yii\behaviors\AttributesBehavior;

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

    public function behaviors()
    {
        return [
            [
                'class' => AttributesBehavior::className(),
                'attributes' => [
 //                   'von' => [
//                        \yii\db\ActiveRecord::EVENT_BEFORE_INSERT => $this->von = \Yii::$app->formatter->asDatetime($this->von, 'yyyy-MM-dd HH:mm:ss.SSS'),
//                        \yii\db\ActiveRecord::EVENT_BEFORE_UPDATE => substr($this->von,0,23), //$this->von = date('Y-m-d H:i:s', \DateTime::createFromFormat('php:Y-m-d H:i:s.u',$this->von)->format('php:Y-m-d H:i:s')),
//                        \yii\db\ActiveRecord::EVENT_AFTER_VALIDATE => substr($this->von,0,23),
//                    ],
/*                    'attribute2' => [
                        \yii\db\ActiveRecord::EVENT_BEFORE_VALIDATE => [$this, 'storeAttributes'],
                        \yii\db\ActiveRecord::EVENT_AFTER_VALIDATE => [$this, 'restoreAttributes'],
                    ],
                    'attribute3' => [
                        \yii\db\ActiveRecord::EVENT_BEFORE_VALIDATE => $fn2 = [$this, 'getAttribute2'],
                        \yii\db\ActiveRecord::EVENT_AFTER_VALIDATE => $fn2,
                    ],
                    'attribute4' => [
                        \yii\db\ActiveRecord::EVENT_BEFORE_DELETE => function ($event, $attribute) {
                            static::disabled() || $event->isValid = false;
                        },
                    ], */
                ],
            ],
      ];
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
      			[['System', 'von', 'bis', 'von_ausw', 'bis_ausw', 'Kunde', 'Standort', 'Betroffen', 'Beschreibung'], 'required'],
      			[['Wartung', 'Intern', 'Wiedervorlage'], 'integer', 'integerOnly'=>true],
            [['von', 'bis', 'von_ausw', 'bis_ausw'], 'date', 'format'=>'php:Y-m-d H:i:s.u', 'on' => ['admin', 'create', 'update']],
            [['von', 'bis', 'von_ausw', 'bis_ausw'], 'date', 'format'=>'php:Ymd H:i:s.u', 'on' => ['save']],
      //			[['System'], 'string', 'max' => 50],
      //			[['Kunde', 'Betroffen', 'Standort'], 'string', 'max'=>4000],
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
