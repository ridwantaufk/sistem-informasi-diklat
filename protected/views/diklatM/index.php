<?php
/* @var $this DiklatMController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs = array(
	'Diklat Ms',
);
?>

<h1>Jenis Diklat</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider' => $dataProvider,
	'itemView' => '_view',
)); ?>