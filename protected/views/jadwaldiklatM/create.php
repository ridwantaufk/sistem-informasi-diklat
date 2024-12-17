<?php
/* @var $this JadwaldiklatMController */
/* @var $model JadwaldiklatM */

$this->breadcrumbs = array(
	'Jadwaldiklat Ms' => array('index'),
	'Create',
);
?>

<div class="container">
	<div class="row">
		<div class="col-md-3">
			<?php echo CHtml::link('<i class="fas fa-arrow-left"></i> Kembali', array('admin'), array('class' => 'btn btn-success')); ?>
		</div>
	</div>
</div>

<h1>Tambah Jadwal Diklat</h1>

<?php $this->renderPartial('_form', array('model' => $model, 'diklatList' => $diklatList)); ?>