<?php
/* @var $this InfokehadiranVController */
/* @var $model InfokehadiranV */

$this->breadcrumbs = array(
	'Infokehadiran Vs' => array('index'),
	$model->nama_peserta,
);

$this->menu = array(
	array('label' => 'Manage InfokehadiranV', 'url' => array('admin')),
);
?>

<h1>View InfokehadiranV #<?php echo $model->nama_peserta; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data' => $model,
	'attributes' => array(
		'nama_peserta',
		'jadwal_tanggal',
		'jadwal_mulai',
		'jadwal_selesai',
		'nama_diklat',
		'kehadiran',
	),
)); ?>