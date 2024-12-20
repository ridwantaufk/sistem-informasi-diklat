<?php

/**
 * This is the model class for table "diklat_m".
 *
 * The followings are the available columns in table 'diklat_m':
 * @property integer $diklat_id
 * @property string $nama_diklat
 * @property string $tanggal_mulai
 * @property string $tanggal_selesai
 *
 * The followings are the available model relations:
 * @property PesertaM[] $pesertaMs
 * @property JadwaldiklatM[] $jadwaldiklatMs
 */
class DiklatM extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'diklat_m';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nama_diklat', 'length', 'max'=>100),
			array('tanggal_mulai, tanggal_selesai', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('diklat_id, nama_diklat, tanggal_mulai, tanggal_selesai', 'safe', 'on'=>'search'),
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
			'pesertaMs' => array(self::HAS_MANY, 'PesertaM', 'diklat_id'),
			'jadwaldiklatMs' => array(self::HAS_MANY, 'JadwaldiklatM', 'diklat_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'diklat_id' => 'Diklat',
			'nama_diklat' => 'Nama Diklat',
			'tanggal_mulai' => 'Tanggal Mulai',
			'tanggal_selesai' => 'Tanggal Selesai',
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

		$criteria->compare('diklat_id',$this->diklat_id);
		$criteria->compare('nama_diklat',$this->nama_diklat,true);
		$criteria->compare('tanggal_mulai',$this->tanggal_mulai,true);
		$criteria->compare('tanggal_selesai',$this->tanggal_selesai,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return DiklatM the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	public function getDiklatList() {
        $diklatList = DiklatM::model()->findAll();
        return CHtml::listData($diklatList, 'diklat_id', 'nama_diklat');
    }
}
