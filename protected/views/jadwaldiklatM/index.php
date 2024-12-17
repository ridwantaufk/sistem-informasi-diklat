<?php
/* @var $this JadwaldiklatMController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Jadwaldiklat Ms',
);

$this->menu=array(
	array('label'=>'Create JadwaldiklatM', 'url'=>array('create')),
	array('label'=>'Manage JadwaldiklatM', 'url'=>array('admin')),
);
?>

<h1>Jadwaldiklat Ms</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
