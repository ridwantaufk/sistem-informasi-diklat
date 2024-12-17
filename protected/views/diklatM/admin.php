<?php
/* @var $this DiklatMController */
/* @var $model DiklatM */

$this->breadcrumbs = array(
	'Diklat Ms' => array('index'),
	'Manage',
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#diklat-m-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<style>
	.table-hover-odd tbody tr:nth-child(odd):hover {
		background: linear-gradient(to right bottom, rgba(69, 69, 69, 0.2), rgba(173, 173, 173, 0.3))
			/* Warna latar belakang yang berbeda untuk baris ganjil saat dihover */
	}

	.table-hover-odd tbody tr:nth-child(even):hover {
		background: linear-gradient(to right bottom, rgba(69, 69, 69, 0.1), rgba(173, 173, 173, 0.2))
			/* Warna latar belakang yang berbeda untuk baris ganjil saat dihover */
	}
</style>

<h2>Pendataan Diklat</h2>

<!-- <p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p> -->
<?php echo CHtml::link('Tambah Jenis Diklat', array('create'), array('class' => 'btn btn-success me-2')); ?>

<?php echo CHtml::link('Pencarian lebih lanjut', '#', array('class' => 'search-button btn btn-primary')); ?>
<div class="search-form" style="display:none">
	<?php $this->renderPartial('_search', array(
		'model' => $model,
	)); ?>
</div><!-- search-form -->

<?php
$this->widget('zii.widgets.grid.CGridView', array(
	'id' => 'diklat-m-grid',
	'dataProvider' => $model->search(),
	'filter' => $model,
	'itemsCssClass' => 'table table-striped table-bordered table-hover-odd',
	'columns' => array(
		'diklat_id',
		'nama_diklat',
		'tanggal_mulai',
		'tanggal_selesai',
		array(
			'class' => 'CButtonColumn'
		),
	),
));
?>