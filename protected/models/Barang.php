<?php

/**
 * This is the model class for table "barang".
 *
 * The followings are the available columns in table 'barang':
 * @property integer $kodeBarang
 * @property string $namaBarang
 * @property integer $kondisi
 */
class Barang extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'barang';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			//array('kondisi', '1'=>'merah','2'=>'biru','3'=>'kuning','4'=>'hitam', 'on'=>'insert'),
			array('kondisi', 'default', 'value'=>'baik', 'on'=>'insert'),
			array('kodeBarang, namaBarang, warna, logo', 'required'),
			array('kodeBarang', 'numerical', 'integerOnly'=>true),
			array('namaBarang', 'length', 'max'=>50),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('kodeBarang, namaBarang, kondisi', 'safe', 'on'=>'search'),
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
			'kodeBarang' => 'Kode Barang',
			'namaBarang' => 'Nama Barang',
			'warna'		 => 'Warna',
			'logo' => 'Logo Sticker',
			'kondisi' => 'Kondisi',
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

		$criteria->compare('kodeBarang',$this->kodeBarang);
		$criteria->compare('namaBarang',$this->namaBarang,true);
		$criteria->compare('warna',$this->warna,true);
		$criteria->compare('logo',$this->logo,true);
		$criteria->compare('kondisi',$this->kondisi);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Barang the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
