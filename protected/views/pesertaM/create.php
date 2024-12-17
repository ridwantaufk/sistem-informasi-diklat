<?php
/* @var $this PesertaMController */
/* @var $model PesertaM */

$this->breadcrumbs=array(
	'Peserta Ms'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List PesertaM', 'url'=>array('index')),
	array('label'=>'Manage PesertaM', 'url'=>array('admin')),
);
?>

<h1>Create PesertaM</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>