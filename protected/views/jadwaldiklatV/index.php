<?php
/* @var $this JadwaldiklatVController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Jadwaldiklat Vs',
);

$this->menu=array(
	array('label'=>'Create JadwaldiklatV', 'url'=>array('create')),
	array('label'=>'Manage JadwaldiklatV', 'url'=>array('admin')),
);
?>

<h1>Jadwaldiklat Vs</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
