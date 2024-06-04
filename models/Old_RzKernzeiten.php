<?php

/**
 * This is the model class for table "RzKernzeiten".
 *
 * The followings are the available columns in table 'RzKernzeiten':
 * @property integer $zId
 * @property string $Mandant
 * @property integer $Wochentag
 * @property string $Kernzeit_von
 * @property string $Kernzeit_bis
 * @property string $Tagesname
 */
class RzKernzeiten extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return RzKernzeiten the static model class
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
		return 'RzKernzeiten';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('Mandant, Wochentag, Kernzeit_von, Kernzeit_bis', 'required'),
			array('Wochentag', 'numerical', 'integerOnly'=>true),
			array('Mandant', 'length', 'max'=>50),
			array('Tagesname', 'length', 'max'=>10),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('zId, Mandant, Wochentag, Kernzeit_von, Kernzeit_bis, Tagesname', 'safe', 'on'=>'search'),
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
			'zId' => 'Z',
			'Mandant' => 'Mandant',
			'Wochentag' => 'Wochentag',
			'Kernzeit_von' => 'Kernzeit Von',
			'Kernzeit_bis' => 'Kernzeit Bis',
			'Tagesname' => 'Tagesname',
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

		$criteria->compare('zId',$this->zId);
		$criteria->compare('Mandant',$this->Mandant,true);
		$criteria->compare('Wochentag',$this->Wochentag);
		$criteria->compare('Kernzeit_von',$this->Kernzeit_von,true);
		$criteria->compare('Kernzeit_bis',$this->Kernzeit_bis,true);
		$criteria->compare('Tagesname',$this->Tagesname,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
			'pagination'=>array(
				'pageSize'=>25
			),
		));
	}
}