<?php

/**
 * This is the model class for table "jadwaldiklat_v".
 *
 * The followings are the available columns in table 'jadwaldiklat_v':
 * @property integer $jadwal_id
 * @property string $tanggal
 * @property string $waktu_mulai
 * @property string $waktu_selesai
 * @property string $nama_diklat
 */
class JadwaldiklatV extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'jadwaldiklat_v';
	}

	public function primaryKey(){
		return 'jadwal_id';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('jadwal_id', 'numerical', 'integerOnly'=>true),
			array('nama_diklat', 'length', 'max'=>100),
			array('tanggal, waktu_mulai, waktu_selesai', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('jadwal_id, tanggal, waktu_mulai, waktu_selesai, nama_diklat', 'safe', 'on'=>'search'),
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
			'jadwal_id' => 'Jadwal',
			'tanggal' => 'Tanggal',
			'waktu_mulai' => 'Waktu Mulai',
			'waktu_selesai' => 'Waktu Selesai',
			'nama_diklat' => 'Nama Diklat',
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

		$criteria->compare('jadwal_id',$this->jadwal_id);
		$criteria->compare('tanggal',$this->tanggal,true);
		$criteria->compare('waktu_mulai',$this->waktu_mulai,true);
		$criteria->compare('waktu_selesai',$this->waktu_selesai,true);
		$criteria->compare('nama_diklat',$this->nama_diklat,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return JadwaldiklatV the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
