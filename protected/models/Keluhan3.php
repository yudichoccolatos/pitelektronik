<?php

/**
 * This is the model class for table "keluhan".
 *
 * The followings are the available columns in table 'keluhan':
 * @property integer $idLapor
 * @property integer $kodeBarang
 * @property string $lokasiBarang
 * @property string $tglLapor
 * @property string $jamLapor
 * @property string $berita
 */
class Keluhan extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'keluhan';
	}
	

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			//array('kodeBarang, lokasiBarang, tglLapor, jamLapor, berita', 'required'),
			array('tglLapor', 'default', 'value'=>date('Y-m-d-H-i-s'), 'on'=>'insert'),
			array('kodeBarang, lokasiBarang, berita', 'required'),
			array('kodeBarang', 'numerical', 'integerOnly'=>true),
			array('lokasiBarang', 'length', 'max'=>20),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('idLapor, kodeBarang, lokasiBarang, tglLapor, berita', 'safe', 'on'=>'search'),
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
			'idLapor' => 'Id Lapor',
			'kodeBarang' => 'Kode Barang',
			'lokasiBarang' => 'Lokasi Barang',
			'tglLapor' => 'Tgl Lapor',
			'berita' => 'Berita',
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

		$criteria->compare('idLapor',$this->idLapor);
		$criteria->compare('kodeBarang',$this->kodeBarang);
		$criteria->compare('lokasiBarang',$this->lokasiBarang,true);
		$criteria->compare('tglLapor',$this->tglLapor,true);
		$criteria->compare('berita',$this->berita,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Keluhan the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
	class detailservice extends keluhan 
{
	public function tableName()
	{
		return 'detailservice';
	}
	
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			//array('kodeBarang, lokasiBarang, tglLapor, jamLapor, berita', 'required'),
			array('tglLapor', 'default', 'value'=>date('Y-m-d-H-i-s'), 'on'=>'insert'),);
	}
	
}
