<?php
/* @var $this PesertaMController */
/* @var $model PesertaM */

// $this->breadcrumbs = array(
// 	'Peserta Ms' => array('index'),
// 	'Manage',
// );



Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#peserta-m-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h2>Tabel Data Peserta</h2>

<!-- <p>
	You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
	or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p> -->

<?php
echo CHtml::link('Lihat Grafik', array('chart', 'showChart' => 1), array('class' => 'btn btn-primary'));
?>


<?php
echo CHtml::link('PDF', array('pdf'), array('class' => 'btn btn-primary'));
?>


<?php echo CHtml::link('Tambah Peserta', array('create'), array('class' => 'btn btn-success')); ?>

<?php echo CHtml::link('Pencarian lebih lanjut', '#', array('class' => 'search-button btn btn-primary')); ?>

<div class="search-form" style="display:none">
	<?php $this->renderPartial('_search', array(
		'model' => $model,
	)); ?>
</div><!-- search-form -->


<?php
$this->widget('zii.widgets.grid.CGridView', array(
	'id' => 'peserta-m-grid',
	'dataProvider' => $model->search(),
	'filter' => $model,
	'itemsCssClass' => 'table table-striped table-bordered',
	'columns' => array(
		'peserta_id',
		'nama_peserta',
		'tanggal_lahir',
		'alamat_peserta',
		'asal_instansi',
		array(
			'name' => 'diklat_id',
			'value' => '$data->diklat->nama_diklat',
		),
		array(
			'class' => 'CButtonColumn',
		),
	),
));
?>