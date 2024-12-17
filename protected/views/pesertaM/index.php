<?php
/* @var $this PesertaMController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Peserta Ms',
);

$this->menu=array(
	array('label'=>'Create PesertaM', 'url'=>array('create')),
	array('label'=>'Manage PesertaM', 'url'=>array('admin')),
);
?>

<h1>Peserta Ms</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
