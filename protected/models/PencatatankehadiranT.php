<?php

/**
 * This is the model class for table "pencatatankehadiran_t".
 *
 * The followings are the available columns in table 'pencatatankehadiran_t':
 * @property integer $catatan_id
 * @property integer $peserta_id
 * @property integer $jadwal_id
 * @property boolean $kehadiran
 *
 * The followings are the available model relations:
 * @property PesertaM $peserta
 * @property JadwaldiklatM $jadwal
 */
class PencatatankehadiranT extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'pencatatankehadiran_t';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('peserta_id, jadwal_id', 'numerical', 'integerOnly'=>true),
			array('kehadiran', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('catatan_id, peserta_id, jadwal_id, kehadiran', 'safe', 'on'=>'search'),
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
			'peserta' => array(self::BELONGS_TO, 'PesertaM', 'peserta_id'),
			'jadwal' => array(self::BELONGS_TO, 'JadwaldiklatM', 'jadwal_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'catatan_id' => 'Catatan',
			'peserta_id' => 'Peserta',
			'jadwal_id' => 'Jadwal',
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

		$criteria->compare('catatan_id',$this->catatan_id);
		$criteria->compare('peserta_id',$this->peserta_id);
		$criteria->compare('jadwal_id',$this->jadwal_id);
		$criteria->compare('kehadiran',$this->kehadiran);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return PencatatankehadiranT the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
