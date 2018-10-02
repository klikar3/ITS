<?php

/**
 * This is the model class for table "Devices".
 *
 * The followings are the available columns in table 'Devices':
 * @property integer $dId
 * @property string $Device
 * @property integer $DeviceId
 */
class NavSecondTier extends MyActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Device the static model class
	 */
  public function getDbConnection()
  {
      return self::getDb2DbConnection();
  }
  
  public function getDb() {
      return Yii::$app()->db2;
  }

	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'Nav_Second_Tier';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('servername, sqlserver, datenbank, service, system, aktiv', 'required'),
			array('id, aktiv', 'numerical', 'integerOnly'=>true),
			array('servername, sqlserver, datenbank, service, system', 'length', 'max'=>250),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, servername, sqlserver, satenbank, service, system, aktiv', 'safe', 'on'=>'search'),
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
			'id' => 'id',
			'servername' => 'Servername',
			'sqlserver' => 'Sqlserver',
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

		$criteria->compare('id',$this->id);
		$criteria->compare('servername',$this->servername,true);
		$criteria->compare('sqlserver',$this->sqlserver);
		$criteria->compare('datenbank',$this->datenbank);
		$criteria->compare('service',$this->service);
		$criteria->compare('system',$this->system);
		$criteria->compare('aktiv',$this->aktiv);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}