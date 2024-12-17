<?php
/* @var $this PencatatankehadiranTController */
/* @var $model PencatatankehadiranT */

$this->breadcrumbs=array(
	'Pencatatankehadiran Ts'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List PencatatankehadiranT', 'url'=>array('index')),
	array('label'=>'Manage PencatatankehadiranT', 'url'=>array('admin')),
);
?>

<h1>Create PencatatankehadiranT</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>