<?php
/* @var $this JadwaldiklatMController */
/* @var $model JadwaldiklatM */

$this->breadcrumbs = array(
	'Jadwaldiklat Ms' => array('index'),
	'Manage',
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#jadwaldiklat-m-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h2>Pendataan Penjadwalan Diklat</h2>

<!-- <p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p> -->

<?php echo CHtml::link('Tambah Jadwal Diklat', array('create'), array('class' => 'btn btn-success me-2')); ?>

<?php echo CHtml::link('Pencarian lebih lanjut', '#', array('class' => 'search-button btn btn-primary')); ?>
<div class="search-form" style="display:none">
	<?php $this->renderPartial('_search', array(
		'model' => $model,
	)); ?>
</div><!-- search-form -->

<?php
$this->widget('zii.widgets.grid.CGridView', array(
	'id' => 'jadwaldiklat-m-grid',
	'dataProvider' => $model->search(),
	'filter' => $model,
	'itemsCssClass' => 'table table-striped table-bordered', // Tambahkan kelas Bootstrap untuk gaya tabel
	'columns' => array(
		'jadwal_id',
		array(
			'name' => 'diklat_id',
			'value' => '$data->diklat->nama_diklat',
		),
		'tanggal',
		'waktu_mulai',
		'waktu_selesai',
		array(
			'class' => 'CButtonColumn',
		),
	),
));
?>