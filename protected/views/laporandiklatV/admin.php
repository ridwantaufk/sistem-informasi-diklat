<?php
/* @var $this LaporandiklatVController */
/* @var $model LaporandiklatV */

$this->breadcrumbs = array(
	'Laporandiklat Vs' => array('index'),
	'Manage',
);

$this->menu = array(
	array('label' => 'List LaporandiklatV', 'url' => array('index')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#laporandiklat-v-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h2>Laporan Diklat</h2>

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
	'id' => 'laporandiklat-v-grid',
	'dataProvider' => $model->search(),
	'filter' => $model,
	'columns' => array(
		'nama_diklat',
		'total_peserta',
		array(
			'class' => 'CButtonColumn',
			'template' => '{view}', // Hanya menampilkan tombol 'view'
			'buttons' => array(
				'view' => array(
					'url' => 'Yii::app()->createUrl("/laporandiklatV/view", array("id"=>$data->primaryKey))', // Ganti dengan URL sesuai kebutuhan
				),
			),
		),
	),
)); ?>