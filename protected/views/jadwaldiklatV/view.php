<?php
/* @var $this JadwaldiklatVController */
/* @var $model JadwaldiklatV */

$this->breadcrumbs = array(
	'Jadwaldiklat Vs' => array('index'),
	$model->jadwal_id,
);

$this->menu = array(
	array('label' => 'Manage JadwaldiklatV', 'url' => array('admin')),
);
?>

<h1>View JadwaldiklatV #<?php echo $model->jadwal_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data' => $model,
	'attributes' => array(
		'jadwal_id',
		'tanggal',
		'waktu_mulai',
		'waktu_selesai',
		'nama_diklat',
	),
)); ?>