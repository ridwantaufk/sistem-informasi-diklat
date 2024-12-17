<?php

class PencatatankehadiranTController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout = '//layouts/column2';

	/**
	 * @return array action filters
	 */
	public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
			'postOnly + delete', // we only allow deletion via POST request
		);
	}

	/**
	 * Specifies the access control rules.
	 * This method is used by the 'accessControl' filter.
	 * @return array access control rules
	 */
	public function accessRules()
	{
		return array(
			array(
				'allow',
				'users' => array('@'),
			),
			array(
				'deny',  // deny all users
				'users' => array('*'),
			),
		);
	}

	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView($id)
	{
		$this->render('view', array(
			'model' => $this->loadModel($id),
		));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model = new PencatatankehadiranT;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if (isset($_POST['PencatatankehadiranT'])) {
			$model->attributes = $_POST['PencatatankehadiranT'];
			if ($model->save())
				$this->redirect(array('view', 'id' => $model->catatan_id));
		}

		$this->render('create', array(
			'model' => $model,
		));
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
		$model = $this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if (isset($_POST['PencatatankehadiranT'])) {
			$model->attributes = $_POST['PencatatankehadiranT'];
			if ($model->save())
				$this->redirect(array('view', 'id' => $model->catatan_id));
		}

		$this->render('update', array(
			'model' => $model,
		));
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id)
	{
		$this->loadModel($id)->delete();

		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if (!isset($_GET['ajax']))
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$dataProvider = new CActiveDataProvider('PencatatankehadiranT');
		$this->render('index', array(
			'dataProvider' => $dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model = new PencatatankehadiranT('search');
		$model->unsetAttributes();  // clear any default values
		if (isset($_GET['PencatatankehadiranT']))
			$model->attributes = $_GET['PencatatankehadiranT'];

		$this->render('admin', array(
			'model' => $model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return PencatatankehadiranT the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model = PencatatankehadiranT::model()->findByPk($id);
		if ($model === null)
			throw new CHttpException(404, 'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param PencatatankehadiranT $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if (isset($_POST['ajax']) && $_POST['ajax'] === 'pencatatankehadiran-t-form') {
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}

	// controllers/PencatatankehadiranTCOntroller.php

	public function actionLoadTanggalJadwal()
	{
		$peserta_id = Yii::app()->getRequest()->getPost('peserta_id');

		// Mendapatkan peserta berdasarkan nama_peserta
		$peserta = PesertaM::model()->findByAttributes(array('peserta_id' => $peserta_id));

		if ($peserta !== null) {
			// Mendapatkan nilai diklat_id dari tabel peserta_m
			$diklatId = $peserta->diklat_id;

			// Asumsikan bahwa hubungan antara jadwaldiklat_m dan diklat_m sudah diatur pada model Yii
			$jadwal = JadwalDiklatM::model()->findByAttributes(array('diklat_id' => $diklatId));

			if ($jadwal !== null) {
				// Mendapatkan tanggal dari jadwal
				$tanggalJadwal = $jadwal;

				// Mengembalikan hasil sebagai JSON
				echo CJSON::encode($tanggalJadwal);
			} else {
				// Jadwal tidak ditemukan
				echo CJSON::encode(null);
			}
		} else {
			// Peserta tidak ditemukan
			echo CJSON::encode(null);
		}

		Yii::app()->end();
	}
}
