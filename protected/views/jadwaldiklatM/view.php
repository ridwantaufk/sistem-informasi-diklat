<?php
/* @var $this JadwaldiklatMController */
/* @var $model JadwaldiklatM */

$this->breadcrumbs=array(
	'Jadwaldiklat Ms'=>array('index'),
	$model->jadwal_id,
);

$this->menu=array(
	array('label'=>'List JadwaldiklatM', 'url'=>array('index')),
	array('label'=>'Create JadwaldiklatM', 'url'=>array('create')),
	array('label'=>'Update JadwaldiklatM', 'url'=>array('update', 'id'=>$model->jadwal_id)),
	array('label'=>'Delete JadwaldiklatM', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->jadwal_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage JadwaldiklatM', 'url'=>array('admin')),
);
?>

<h1>View JadwaldiklatM #<?php echo $model->jadwal_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'jadwal_id',
		// 'diklat_id',
		[
			'name' => 'diklat_id',
			'value' => $model->diklat->nama_diklat,
		],
		'tanggal',
		'waktu_mulai',
		'waktu_selesai',
	),
)); ?>
