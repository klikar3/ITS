<?php

/**
 * This is the model class for table "Devices".
 *
 * The followings are the available columns in table 'Devices':
 * @property integer $dId
 * @property string $Device
 * @property integer $DeviceId
 */
class NavSessions extends MyActiveRecord
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
		return 'sess_dat';
	}
/*
  public function attributes() {
      $attributes = parent::attributes();
      return array( 'Servername' => $attributes->ServerComputerName, 
          'Anzahl' => $attributes->Anzahl,
      );
  }
  
  // explicitly list every field, best used when you want to make sure the changes
  // in your DB table or model attributes do not cause your field changes (to keep API backward compatibility).
  public function fields()
  {
      return array(
          // field name is the same as the attribute name
          'Anzahl',
  
          // field name is "email", the corresponding attribute name is "email_address"
          'Servername' => 'Servername',
      );
  }
 */ 
  public function primaryKey(){
      return 'ServerComputerName';
  }
  

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('ServerComputerName, Anzahl', 'required'),
			array('Anzahl', 'numerical', 'integerOnly'=>true),
			array('ServerComputerName', 'length', 'max'=>250),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('ServerComputerName, Anzahl', 'safe', 'on'=>'search'),
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
			'ServerComputerName' => 'ServerComputerName',
			'Anzahl' => 'Anzahl',
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

		$criteria->compare('ServerComputerName',$this->ServerComputerName,true);
		$criteria->compare('Anzahl',$this->Anzahl);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}