<?php

class SiteController extends Controller
{

	public function filters()
	{
		return array(
			'accessControl', // Mengaktifkan filter accessControl
		);
	}

	public function accessRules()
	{
		return array(
			array(
				'deny',
				'actions' => array('index', 'contact'),
				'users' => array('?'),
			),
			array(
				'allow',
				'actions' => array('index', 'about', 'contact'), // Aksi lain yang diizinkan setelah login
				'users' => array('@'),
			),
			array(
				'deny',
				'actions' => array('login', 'signup'), // Aksi login dan signup yang akan dibatasi
				'users' => array('@'),
				'deniedCallback' => function () {
					Yii::app()->user->setFlash('warning', 'Anda sudah login.');
					$this->redirect(Yii::app()->homeUrl);
				},
			),
			array(
				'allow',
				'actions' => array('login', 'signup'),
				'users' => array('?'),
			),
		);
	}







	/**
	 * Declares class-based actions.
	 */
	public function actions()
	{
		return array(
			// captcha action renders the CAPTCHA image displayed on the contact page
			'captcha' => array(
				'class' => 'CCaptchaAction',
				'backColor' => 0xFFFFFF,
			),
			// page action renders "static" pages stored under 'protected/views/site/pages'
			// They can be accessed via: index.php?r=site/page&view=FileName
			'page' => array(
				'class' => 'CViewAction',
			),
		);
	}


	/**
	 * This is the default 'index' action that is invoked
	 * when an action is not explicitly requested by users.
	 */
	public function actionIndex()
	{
		$jumlah_diklat = Yii::app()->db->createCommand('SELECT COUNT(*) FROM diklat_m')->queryScalar();
		$jumlah_peserta = Yii::app()->db->createCommand('SELECT COUNT(*) FROM peserta_m')->queryScalar();
		$jumlah_kegiatan = Yii::app()->db->createCommand('SELECT COUNT(*) FROM jadwaldiklat_m')->queryScalar();
		$total_harga_diklat = Yii::app()->db->createCommand('SELECT SUM(harga_diklat) FROM diklat_m')->queryScalar();
		// 	$jumlah_aktivitas_diklat = Yii::app()->db->createCommand()
		// ->select('COUNT(DISTINCT diklat.nama_diklat)')
		// ->from('jadwaldiklat_m')
		// ->join('JOIN', 'diklat_m', 'jadwaldiklat_m.diklat_id = diklat_m.diklat_id')
		// ->where('diklat_m.diklat_id = :diklat_id', [':diklat_id' => $diklat_id])
		// ->queryScalar();

		$this->render('index', array(
			'jumlah_diklat' => $jumlah_diklat,
			'jumlah_peserta' => $jumlah_peserta,
			'jumlah_kegiatan' => $jumlah_kegiatan,
			'total_harga_diklat' => $total_harga_diklat,
			// 'jumlah_aktivitas_diklat'=> $jumlah_aktivitas_diklat,
		));
	}


	/**
	 * This is the action to handle external exceptions.
	 */
	public function actionError()
	{
		if ($error = Yii::app()->errorHandler->error) {
			if (Yii::app()->request->isAjaxRequest)
				echo $error['message'];
			else
				$this->render('error', $error);
		}
	}

	/**
	 * Displays the contact page
	 */
	public function actionContact()
	{
		$model = new ContactForm;
		if (isset($_POST['ContactForm'])) {
			$model->attributes = $_POST['ContactForm'];
			if ($model->validate()) {
				$name = '=?UTF-8?B?' . base64_encode($model->name) . '?=';
				$subject = '=?UTF-8?B?' . base64_encode($model->subject) . '?=';
				$headers = "From: $name <{$model->email}>\r\n" .
					"Reply-To: {$model->email}\r\n" .
					"MIME-Version: 1.0\r\n" .
					"Content-Type: text/plain; charset=UTF-8";

				mail(Yii::app()->params['adminEmail'], $subject, $model->body, $headers);
				Yii::app()->user->setFlash('contact', 'Thank you for contacting us. We will respond to you as soon as possible.');
				$this->refresh();
			}
		}
		$this->render('contact', array('model' => $model));
	}

	public function actionSignup()
	{
		$model = new User;

		if (isset($_POST['User'])) {
			$model->attributes = $_POST['User'];
			if ($model->save()) {
				$this->redirect(array('login'));
			}
		}

		$this->render('signup', array('model' => $model));
	}

	/**
	 * Displays the login page
	 */
	public function actionLogin()
	{
		$model = new LoginForm;

		if (isset($_POST['LoginForm'])) {
			$model->attributes = $_POST['LoginForm'];
			if ($model->validate() && $model->login()) {
				$this->redirect(Yii::app()->homeUrl);
			}
		}

		$this->render('login', array('model' => $model));
	}

	/**
	 * Logs out the current user and redirect to homepage.
	 */
	public function actionLogout()
	{
		Yii::app()->user->logout();
		$this->redirect(Yii::app()->homeUrl);
	}
}
