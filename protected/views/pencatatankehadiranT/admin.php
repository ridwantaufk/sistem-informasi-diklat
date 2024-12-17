<?php
/* @var $this PencatatankehadiranTController */
/* @var $model PencatatankehadiranT */

$this->breadcrumbs=array(
	'Pencatatankehadiran Ts'=>array('index'),
	'Manage',
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#pencatatankehadiran-t-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h2>Pendataan Pencatatan Kehadiran Peserta</h2>

<!-- <p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p> -->

<?php echo CHtml::link('Tambah Pencatatan Kehadiran', array('create'), array('class' => 'btn btn-success me-2')); ?>

<?php echo CHtml::link('Pencarian lebih lanjut', '#', array('class' => 'search-button btn btn-primary')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'pencatatankehadiran-t-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'catatan_id',
		'peserta_id',
		'jadwal_id',
		'kehadiran',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
