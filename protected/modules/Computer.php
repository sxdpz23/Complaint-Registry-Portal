<?php

/**
 * This is the model class for table "computer".
 *
 * The followings are the available columns in table 'computer':
 * @property integer $id
 * @property string $name
 * @property string $date
 * @property string $location
 * @property string $contact
 * @property string $complaint
 * @property string $workAssignTo
 * @property string $actionTaken
 * @property string $status
 * @property string $workDoneOn
 * @property string $updatedBy
 */
class Computer extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Computer the static model class
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
		return 'computer';
	}

 protected function beforeSave()
{

$this->date=date('Y-m-d', strtotime($this->date)) ;
$this->workDoneOn=date('Y-m-d', strtotime($this->workDoneOn));
return TRUE;



}

protected function afterFind()
{

$this->date=date('d-m-Y', strtotime($this->date)) ;
$this->workDoneOn=date('d-m-Y', strtotime($this->workDoneOn));
return TRUE;


}     
        
        
        
        
        
        
        
        
	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array(' location, contact, complaint', 'required'),
			array('name, workAssignTo, status, updatedBy', 'length', 'max'=>30),
			array('location', 'length', 'max'=>50),
			array('contact', 'length', 'max'=>20),
			array('complaint, actionTaken', 'length', 'max'=>1000),
			array('workDoneOn', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, name, date, location, contact, complaint, workAssignTo, actionTaken, status, workDoneOn, updatedBy', 'safe', 'on'=>'search'),
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
			'id' => 'ID',
			'name' => 'Name',
			'date' => 'Date',
			'location' => 'Location',
			'contact' => 'Contact',
			'complaint' => 'Complaint',
			'workAssignTo' => 'Work Assign To',
			'actionTaken' => 'Action Taken',
			'status' => 'Status',
			'workDoneOn' => 'Work Done On',
			'updatedBy' => 'Updated By',
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
		$criteria->compare('name',$this->name,true);
		$criteria->compare('date',$this->date,true);
		$criteria->compare('location',$this->location,true);
		$criteria->compare('contact',$this->contact,true);
		$criteria->compare('complaint',$this->complaint,true);
		$criteria->compare('workAssignTo',$this->workAssignTo,true);
		$criteria->compare('actionTaken',$this->actionTaken,true);
		$criteria->compare('status',$this->status,true);
		$criteria->compare('workDoneOn',$this->workDoneOn,true);
		$criteria->compare('updatedBy',$this->updatedBy,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}