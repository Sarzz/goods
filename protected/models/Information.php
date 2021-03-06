<?php

/**
 * This is the model class for table "information".
 *
 * The followings are the available columns in table 'information':
 * @property integer $id
 * @property string $full_name
 * @property string $title
 * @property string $description
 * @property string $email
 * @property integer $number
 * @property string $image
 */
class Information extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'information';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('full_name, title, description, email, number', 'required'),
			array('number', 'numerical', 'integerOnly'=>true),
			array('full_name, phone, location, image, title, time, email', 'length', 'max'=>256, 'on'=>'insert,update'),
			// @todo Please remove those attributes that should not be searched.
            array('image', 'file','types'=>'jpg, gif, png', 'allowEmpty'=>true, 'on'=>'update'),
			
			// The following rule is used by search().
			array('id, full_name, image, title, time, description, email, number', 'safe', 'on'=>'search'),
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
			'full_name' => 'Full Name',
			'title' => 'Title',
			'description' => 'Description',
			'email' => 'Email',
			'number' => 'Number',
            'time' => 'Date',
            'image' => 'Image',
            'phone' => 'Model',
            'location' => 'Location',
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

		$criteria->compare('id',$this->id);
		$criteria->compare('full_name',$this->full_name,true);
		$criteria->compare('title',$this->title,true);
		$criteria->compare('description',$this->description,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('number',$this->number);
        $criteria->compare('time',$this->time);
        $criteria->compare('image',$this->image);
        $criteria->compare('phone',$this->phone);
        $criteria->compare('location',$this->location);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Information the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
