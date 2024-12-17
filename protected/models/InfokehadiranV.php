<?php

/**
 * This is the model class for table "infokehadiran_v".
 *
 * The followings are the available columns in table 'infokehadiran_v':
 * @property string $nama_peserta
 * @property string $jadwal_tanggal
 * @property string $jadwal_mulai
 * @property string $jadwal_selesai
 * @property string $nama_diklat
 * @property boolean $kehadiran
 */
class InfokehadiranV extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'infokehadiran_v';
	}

	public function primaryKey(){
		return 'nama_peserta';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nama_peserta, nama_diklat', 'length', 'max'=>100),
			array('jadwal_tanggal, jadwal_mulai, jadwal_selesai, kehadiran', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('nama_peserta, jadwal_tanggal, jadwal_mulai, jadwal_selesai, nama_diklat, kehadiran', 'safe', 'on'=>'search'),
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
			'nama_peserta' => 'Nama Peserta',
			'jadwal_tanggal' => 'Jadwal Tanggal',
			'jadwal_mulai' => 'Jadwal Mulai',
			'jadwal_selesai' => 'Jadwal Selesai',
			'nama_diklat' => 'Nama Diklat',
			'kehadiran' => 'Kehadiran',
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

		$criteria->compare('nama_peserta',$this->nama_peserta,true);
		$criteria->compare('jadwal_tanggal',$this->jadwal_tanggal,true);
		$criteria->compare('jadwal_mulai',$this->jadwal_mulai,true);
		$criteria->compare('jadwal_selesai',$this->jadwal_selesai,true);
		$criteria->compare('nama_diklat',$this->nama_diklat,true);
		$criteria->compare('kehadiran',$this->kehadiran);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return InfokehadiranV the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
