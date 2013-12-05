<?php

/**
 * This is the model class for table "detailservice".
 *
 * The followings are the available columns in table 'detailservice':
 * @property integer $idLapor
 * @property integer $kodeBarang
 * @property string $tglLaporan
 * @property string $tglService
 * @property string $indikasiKerusakan
 * @property string $perbaikan
 */
class Detailservice extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'detailservice';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('idLapor, kodeBarang, tglLaporan, tglService, indikasiKerusakan, perbaikan', 'required'),
			array('idLapor, kodeBarang', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('idLapor, kodeBarang, tglLaporan, tglService, indikasiKerusakan, perbaikan', 'safe', 'on'=>'search'),
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
			'tglLaporan' => 'Tgl Laporan',
			'tglService' => 'Tgl Service',
			'indikasiKerusakan' => 'Indikasi Kerusakan',
			'perbaikan' => 'Perbaikan',
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
		$criteria->compare('tglLaporan',$this->tglLaporan,true);
		$criteria->compare('tglService',$this->tglService,true);
		$criteria->compare('indikasiKerusakan',$this->indikasiKerusakan,true);
		$criteria->compare('perbaikan',$this->perbaikan,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Detailservice the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
