<?php

/**
 * This is the model class for table "jadwaldiklat_m".
 *
 * The followings are the available columns in table 'jadwaldiklat_m':
 * @property integer $jadwal_id
 * @property integer $diklat_id
 * @property string $tanggal
 * @property string $waktu_mulai
 * @property string $waktu_selesai
 *
 * The followings are the available model relations:
 * @property DiklatM $diklat
 * @property PencatatankehadiranT[] $pencatatankehadiranTs
 */
class JadwaldiklatM extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'jadwaldiklat_m';
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
			array('tanggal, waktu_mulai, waktu_selesai', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('jadwal_id, diklat_id, tanggal, waktu_mulai, waktu_selesai', 'safe', 'on'=>'search'),
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
			'pencatatankehadiranTs' => array(self::HAS_MANY, 'PencatatankehadiranT', 'jadwal_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'jadwal_id' => 'Jadwal',
			'diklat_id' => 'Diklat',
			'tanggal' => 'Tanggal',
			'waktu_mulai' => 'Waktu Mulai',
			'waktu_selesai' => 'Waktu Selesai',
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
		$criteria->compare('diklat_id',$this->diklat_id);
		$criteria->compare('tanggal',$this->tanggal,true);
		$criteria->compare('waktu_mulai',$this->waktu_mulai,true);
		$criteria->compare('waktu_selesai',$this->waktu_selesai,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return JadwaldiklatM the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
