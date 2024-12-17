<?php
/* @var $this LaporandiklatVController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs = array(
	'Laporandiklat Vs',
);

$this->menu = array(
	array('label' => 'Manage LaporandiklatV', 'url' => array('admin')),
);
?>

<h1>Laporandiklat Vs</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider' => $dataProvider,
	'itemView' => '_view',
)); ?>