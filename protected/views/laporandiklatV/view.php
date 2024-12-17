<?php
/* @var $this LaporandiklatVController */
/* @var $model LaporandiklatV */

$this->breadcrumbs = array(
	'Laporandiklat Vs' => array('index'),
	$model->nama_diklat,
);

$this->menu = array(
	array('label' => 'Manage LaporandiklatV', 'url' => array('admin')),
);
?>

<h1>View LaporandiklatV #<?php echo $model->nama_diklat; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data' => $model,
	'attributes' => array(
		'nama_diklat',
		'total_peserta',
	),
)); ?>