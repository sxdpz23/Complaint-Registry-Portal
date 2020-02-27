<?php

/**
 * This is the model class for table "users_reg".
 *
 * The followings are the available columns in table 'users_reg':
 * @property integer $ID
 * @property string $FullName
 * @property integer $Age
 * @property string $Email
 * @property string $Department
 * @property integer $Authorize
 * @property string $PCNo
 * @property string $DOB
 * @property string $Username
 * @property string $Password
 * @property string $DateRegistered
 */
class RegisterForm extends CActiveRecord
{
	public $verifyCode;

    
        /**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'users_reg';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('ID, FullName, Age, Email, Department, PCNo, DOB, Username, Password, verifyPassword', 'required'),
                        // email has to be a valid email address
			array('Email', 'email'),
			array('ID, Age', 'numerical', 'integerOnly'=>true),
			array('FullName, Email, Username, Password, verifyPassword', 'length', 'max'=>200),
			array('Department', 'length', 'max'=>100),
			array('PCNo', 'length', 'max'=>7),
                        array('Password, verifyPassword', 'length', 'min'=>4),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('ID, FullName, Age, Email, Department, Authorize, PCNo, DOB, Username, Password, verifyPassword, DateRegistered', 'safe', 'on'=>'search'),
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
			'ID' => 'ID',
			'FullName' => 'Full Name',
			'Age' => 'Age',
			'Email' => 'Email',
			'Department' => 'Department',
			'Authorize' => 'Authorize',
			'PCNo' => 'Pcno',
			'DOB' => 'Dob',
			'Username' => 'Username',
			'Password' => 'Password',
                        'verifyCode'=>'Verification Code',
                        'verifyPassword'=>'Verify Password',
			'DateRegistered' => 'Date Registered',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('ID',$this->ID);
		$criteria->compare('FullName',$this->FullName,true);
		$criteria->compare('Age',$this->Age);
		$criteria->compare('Email',$this->Email,true);
		$criteria->compare('Department',$this->Department,true);
		$criteria->compare('Authorize',$this->Authorize);
		$criteria->compare('PCNo',$this->PCNo,true);
		$criteria->compare('DOB',$this->DOB,true);
		$criteria->compare('Username',$this->Username,true);
		$criteria->compare('Password',$this->Password,true);
		$criteria->compare('DateRegistered',$this->DateRegistered,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return RegisterForm the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
