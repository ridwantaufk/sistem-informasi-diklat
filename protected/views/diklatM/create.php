<?php
/* @var $this DiklatMController */
/* @var $model DiklatM */

$this->breadcrumbs = array(
	'Diklat Ms' => array('index'),
	'Create',
);

echo CHtml::link('Kembali', array('index'), array('class' => 'btn btn-success me-2'));
?>

<h1>Create DiklatM</h1>

<?php $this->renderPartial('_form', array('model' => $model)); ?>