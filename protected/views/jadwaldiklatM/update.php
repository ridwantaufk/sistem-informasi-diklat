<?php
/* @var $this JadwaldiklatMController */
/* @var $model JadwaldiklatM */

$this->breadcrumbs=array(
	'Jadwaldiklat Ms'=>array('index'),
	$model->jadwal_id=>array('view','id'=>$model->jadwal_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List JadwaldiklatM', 'url'=>array('index')),
	array('label'=>'Create JadwaldiklatM', 'url'=>array('create')),
	array('label'=>'View JadwaldiklatM', 'url'=>array('view', 'id'=>$model->jadwal_id)),
	array('label'=>'Manage JadwaldiklatM', 'url'=>array('admin')),
);
?>

<h1>Update JadwaldiklatM <?php echo $model->jadwal_id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model, 'diklatList' => $diklatList )); ?>