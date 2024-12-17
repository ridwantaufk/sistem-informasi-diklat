<?php
Yii::import('application.controllers.PDF');
class PesertaMController extends Controller
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
				'allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions' => array('admin', 'delete'),
				'users' => array('admin'),
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
		$model = new PesertaM;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if (isset($_POST['PesertaM'])) {
			$model->attributes = $_POST['PesertaM'];
			$model->tanggal_lahir = date('Y-m-d', strtotime(str_replace(' - ', ' ', $model->tanggal_lahir)));
			if ($model->save())
				$this->redirect(array('view', 'id' => $model->peserta_id));
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

		if (isset($_POST['PesertaM'])) {
			$model->attributes = $_POST['PesertaM'];
			$model->tanggal_lahir = date('Y-m-d', strtotime(str_replace(' - ', ' ', $model->tanggal_lahir)));
			if ($model->save())
				$this->redirect(array('view', 'id' => $model->peserta_id));
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
		$dataProvider = new CActiveDataProvider('PesertaM');
		$this->render('index', array(
			'dataProvider' => $dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model = new PesertaM('search');
		$model->unsetAttributes();  // clear any default values
		if (isset($_GET['PesertaM']))
			$model->attributes = $_GET['PesertaM'];

		$this->render('admin', array(
			'model' => $model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return PesertaM the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model = PesertaM::model()->findByPk($id);
		if ($model === null)
			throw new CHttpException(404, 'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param PesertaM $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if (isset($_POST['ajax']) && $_POST['ajax'] === 'peserta-m-form') {
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}

	// public function actionChart()
	// {
	// 	$data = Yii::app()->db->createCommand('SELECT COUNT(*) as total, diklat_id FROM peserta_m GROUP BY diklat_id')->queryAll();
	// 	$this->render('chart', array('data' => $data));
	// }

	public function actionChart()
	{
		$data = Yii::app()->db->createCommand()
			->select('COUNT(*) as total, peserta_m.diklat_id, diklat_m.nama_diklat')
			->from('peserta_m')
			->join('diklat_m', 'peserta_m.diklat_id = diklat_m.diklat_id')
			->group('peserta_m.diklat_id, diklat_m.nama_diklat')
			->queryAll();

		$this->render('chart', array('data' => $data));
	}


	public function actionPdf()
	{
		$pdf = new PDF('P', 'mm', 'A4');
		$pdf->generatePesertaPDF();
	}
}
