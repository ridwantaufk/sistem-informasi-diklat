<?php
/* @var $this DiklatMController */
/* @var $model DiklatM */

$this->breadcrumbs=array(
	'Diklat Ms'=>array('index'),
	$model->diklat_id=>array('view','id'=>$model->diklat_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List DiklatM', 'url'=>array('index')),
	array('label'=>'Create DiklatM', 'url'=>array('create')),
	array('label'=>'View DiklatM', 'url'=>array('view', 'id'=>$model->diklat_id)),
	array('label'=>'Manage DiklatM', 'url'=>array('admin')),
);
?>

<h1>Update DiklatM <?php echo $model->diklat_id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>