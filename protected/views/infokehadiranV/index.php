<?php
/* @var $this InfokehadiranVController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Infokehadiran Vs',
);

$this->menu=array(
	array('label'=>'Create InfokehadiranV', 'url'=>array('create')),
	array('label'=>'Manage InfokehadiranV', 'url'=>array('admin')),
);
?>

<h1>Infokehadiran Vs</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
