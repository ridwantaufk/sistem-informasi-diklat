<?php
/* @var $this PencatatankehadiranTController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Pencatatankehadiran Ts',
);

$this->menu=array(
	array('label'=>'Create PencatatankehadiranT', 'url'=>array('create')),
	array('label'=>'Manage PencatatankehadiranT', 'url'=>array('admin')),
);
?>

<h1>Pencatatankehadiran Ts</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
