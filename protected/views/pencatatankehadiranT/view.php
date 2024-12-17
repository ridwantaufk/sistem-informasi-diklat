<?php
/* @var $this PencatatankehadiranTController */
/* @var $model PencatatankehadiranT */

$this->breadcrumbs=array(
	'Pencatatankehadiran Ts'=>array('index'),
	$model->catatan_id,
);

$this->menu=array(
	array('label'=>'List PencatatankehadiranT', 'url'=>array('index')),
	array('label'=>'Create PencatatankehadiranT', 'url'=>array('create')),
	array('label'=>'Update PencatatankehadiranT', 'url'=>array('update', 'id'=>$model->catatan_id)),
	array('label'=>'Delete PencatatankehadiranT', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->catatan_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage PencatatankehadiranT', 'url'=>array('admin')),
);
?>

<h1>View PencatatankehadiranT #<?php echo $model->catatan_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'catatan_id',
		'peserta_id',
		'jadwal_id',
		'kehadiran',
	),
)); ?>
