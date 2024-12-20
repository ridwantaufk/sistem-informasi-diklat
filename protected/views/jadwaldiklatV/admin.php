<?php
/* @var $this JadwaldiklatVController */
/* @var $model JadwaldiklatV */

$this->breadcrumbs = array(
	'Jadwaldiklat Vs' => array('index'),
	'Manage',
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#jadwaldiklat-v-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h2>Tabel Jadwal Diklat</h2>

<!-- <p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p> -->

<?php echo CHtml::link('Advanced Search', '#', array('class' => 'search-button')); ?>
<div class="search-form" style="display:none">
	<?php $this->renderPartial('_search', array(
		'model' => $model,
	)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id' => 'jadwaldiklat-v-grid',
	'dataProvider' => $model->search(),
	'filter' => $model,
	'columns' => array(
		'jadwal_id',
		'tanggal',
		'waktu_mulai',
		'waktu_selesai',
		'nama_diklat',
		array(
			'class' => 'CButtonColumn',
			'template' => '{view}', // Hanya menampilkan tombol 'view'
			'buttons' => array(
				'view' => array(
					'url' => 'Yii::app()->createUrl("/jadwaldiklatV/view", array("id"=>$data->primaryKey))', // Ganti dengan URL sesuai kebutuhan
				),
			),
		),
	),
)); ?>