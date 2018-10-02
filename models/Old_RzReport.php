<?php

/**
 * This is the model class for table "RzReport".
 *
 * The followings are the available columns in table 'RzReport':
 * @property string $Rid
 * @property string $System
 * @property string $von
 * @property string $bis
 * @property string $von_ausw
 * @property string $bis_ausw
 * @property string $Kunde
 * @property integer $Betroffen
 * @property integer $Standort
 * @property integer $Prio
 * @property integer $Schwere
 * @property string $Beschreibung
 * @property string $Aktion
 * @property string $Loesung
 * @property boolean $Wartung
 * @property boolean $Intern
 */
class RzReport extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return RzReport the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'RzReport';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
 //     array('Rid', 'readOnly'=>true, 'on'=>'update'),
			array('System, von, bis, von_ausw, bis_ausw, Kunde, Standort, Betroffen', 'required', 'on'=>'insert,update'),
			array('Wartung, Intern, Wiedervorlage', 'numerical', 'integerOnly'=>true),
			array('System', 'length', 'max'=>50),
			array('Kunde, Betroffen, Standort', 'length', 'max'=>4000),
			array('Beschreibung, Aktion, Loesung, Wartung, Intern, Freigegeben,
      Externe_betroffen, SLA_betroffen, Author, Korrektor, Wiedervorlage', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('Rid, System, von, bis, von_ausw, bis_ausw, Kunde, Betroffen, Standort, Prio, Schwere, Beschreibung, Aktion, Loesung, Wartung, Intern, Freigegeben,
      Externe_betroffen, SLA_betroffen, Author, Korrektor, Wiedervorlage', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'Rid' => 'Rid',
			'System' => 'Auslösendes System',
			'von' => 'Beginn der Störung',
			'bis' => 'Ende der Störung',
      'von_ausw' => 'Beginn Auswirkung',
      'bis_ausw' => 'Ende Auswirkung',
			'Kunde' => 'Kunde',
      'Betroffen' => 'Auswirkung auf Dienste',
      'Standort' => 'Standort',
			'Prio' => 'Priorität',
			'Schwere' => 'Schwere',
			'Beschreibung' => 'Beschreibung',
			'Aktion' => 'Aktion',
			'Loesung' => 'Lösung',
			'Wartung' => 'Angekündigte Wartung',
			'Intern' => 'Intern',
      'Freigegeben' => 'Freigegeben',
      'Externe_betroffen' => 'Externe betr.',
      'SLA_betroffen' => 'SLA betr.',
      'Author' => 'Erstellt von',
      'Korrektor' => 'Geändert von',
      'Wiedervorlage' => 'Zur Wiedervorlage'
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('Rid',$this->Rid,true);
		$criteria->compare('System',$this->System,true);
		$criteria->compare('von',$this->von,true);
		$criteria->compare('bis',$this->bis,true);
		$criteria->compare('von_ausw',$this->von_ausw,true);
		$criteria->compare('bis_ausw',$this->bis_ausw,true);
		$criteria->compare('Kunde',$this->Kunde,true);
		$criteria->compare('Betroffen',$this->Betroffen);
		$criteria->compare('Standort',$this->Standort);
		$criteria->compare('Prio',$this->Prio);
		$criteria->compare('Schwere',$this->Schwere);
		$criteria->compare('Beschreibung',$this->Beschreibung,true);
		$criteria->compare('Aktion',$this->Aktion,true);
		$criteria->compare('Loesung',$this->Loesung,true);
		$criteria->compare('Wartung',$this->Wartung);
		$criteria->compare('Intern',$this->Intern);
    $criteria->compare('Freigegeben',$this->Freigegeben);
    $criteria->compare('Externe_betroffen',$this->Externe_betroffen);
    $criteria->compare('SLA_betroffen',$this->SLA_betroffen);
    $criteria->compare('Author',$this->Author);
    $criteria->compare('Korrektor',$this->Korrektor);
    $criteria->compare('Wiedervorlage',$this->Wiedervorlage);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
			'sort'=>array(
				'defaultOrder'=>'Wiedervorlage DESC, von DESC',
			),
			'pagination'=>array(
				'pageSize'=>25
			),
		));
	}
  
  //public function behaviors()
  //{
    //return array('datetimeI18NBehavior' => array('class' => 'ext.DateTimeI18NBehavior')); // 'ext' is in Yii 1.0.8 version. For early versions, use 'application.extensions' instead.
  //}
}