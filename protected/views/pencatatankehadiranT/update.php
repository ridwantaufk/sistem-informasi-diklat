<?php
/* @var $this PencatatankehadiranTController */
/* @var $model PencatatankehadiranT */

$this->breadcrumbs=array(
	'Pencatatankehadiran Ts'=>array('index'),
	$model->catatan_id=>array('view','id'=>$model->catatan_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List PencatatankehadiranT', 'url'=>array('index')),
	array('label'=>'Create PencatatankehadiranT', 'url'=>array('create')),
	array('label'=>'View PencatatankehadiranT', 'url'=>array('view', 'id'=>$model->catatan_id)),
	array('label'=>'Manage PencatatankehadiranT', 'url'=>array('admin')),
);
?>

<h1>Update PencatatankehadiranT <?php echo $model->catatan_id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>