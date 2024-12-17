<?php

/**
 * This is the model class for table "peserta_m".
 *
 * The followings are the available columns in table 'peserta_m':
 * @property integer $peserta_id
 * @property string $no_ktp
 * @property string $nama_peserta
 * @property string $jenis_kelamin
 * @property string $tanggal_lahir
 * @property string $alamat_peserta
 * @property string $asal_instansi
 * @property integer $diklat_id
 *
 * The followings are the available model relations:
 * @property DiklatM $diklat
 * @property PencatatankehadiranT[] $pencatatankehadiranTs
 */
class PesertaM extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'peserta_m';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('diklat_id', 'numerical', 'integerOnly'=>true),
			array('no_ktp', 'length', 'max'=>20),
			array('no_ktp', 'match', 'pattern' => '/^\d+$/', 'message' => 'Hanya angka yang diperbolehkan.'),
			array('nama_peserta', 'length', 'max'=>100),
			array('tanggal_lahir', 'date', 'format' => 'yyyy-MM-dd'),
			array('jenis_kelamin', 'length', 'max'=>10),
			array('alamat_peserta', 'length', 'max'=>200),
			array('asal_instansi', 'length', 'max'=>100),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('peserta_id, no_ktp, nama_peserta, tanggal_lahir, jenis_kelamin, alamat_peserta, asal_instansi, diklat_id', 'safe', 'on'=>'search'),
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
			'diklat' => array(self::BELONGS_TO, 'DiklatM', 'diklat_id'),
			'pencatatankehadiranTs' => array(self::HAS_MANY, 'PencatatankehadiranT', 'peserta_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'peserta_id' => 'Peserta',
			'no_ktp' => 'NO KTP',
			'nama_peserta' => 'Nama Peserta',
			'tanggal_lahir' => 'Tanggal Lahir',
			'jenis_kelamin' => 'Jenis Kelamin',
			'alamat_peserta' => 'Alamat Peserta',
			'asal_instansi' => 'Asal Instansi',
			'diklat_id' => 'Diklat',
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

		$criteria->compare('peserta_id',$this->peserta_id);
		$criteria->compare('no_ktp',$this->no_ktp,true);
		$criteria->compare('nama_peserta',$this->nama_peserta,true);
		$criteria->compare('tanggal_lahir',$this->tanggal_lahir,true);
		$criteria->compare('jenis_kelamin',$this->jenis_kelamin,true);
		$criteria->compare('alamat_peserta',$this->alamat_peserta,true);
		$criteria->compare('asal_instansi',$this->asal_instansi,true);
		$criteria->compare('diklat_id',$this->diklat_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return PesertaM the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
