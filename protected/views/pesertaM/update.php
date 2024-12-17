<?php
/* @var $this PesertaMController */
/* @var $model PesertaM */

$this->breadcrumbs=array(
	'Peserta Ms'=>array('index'),
	$model->peserta_id=>array('view','id'=>$model->peserta_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List PesertaM', 'url'=>array('index')),
	array('label'=>'Create PesertaM', 'url'=>array('create')),
	array('label'=>'View PesertaM', 'url'=>array('view', 'id'=>$model->peserta_id)),
	array('label'=>'Manage PesertaM', 'url'=>array('admin')),
);
?>

<h1>Update PesertaM <?php echo $model->peserta_id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>