<?php
/* @var $this DiklatMController */
/* @var $model DiklatM */

$this->breadcrumbs = array(
	'Diklat Ms' => array('index'),
	$model->diklat_id,
);
?>

<div class="container">
	<div class="row">
		<div class="col-md-3">
			<?php echo CHtml::link('<i class="fas fa-arrow-left"></i> Kembali', array('index'), array('class' => 'btn btn-success')); ?>
		</div>
	</div>
	<div class="row">
		<div class="col-md-3">
			<?php echo CHtml::link('<i class="fas fa-plus"></i> Tambah Data', array('create'), array('class' => 'btn btn-success')); ?>
		</div>
		<div class="col-md-3">
			<?php echo CHtml::link('<i class="fas fa-pencil-alt"></i> Perbarui', array('update', 'id' => $model->diklat_id), array('class' => 'btn btn-primary')); ?>
		</div>
		<div class="col-md-3">
			<?php echo CHtml::link('<i class="fas fa-trash"></i> Hapus', '#', array('class' => 'btn btn-danger', 'submit' => array('delete', 'id' => $model->diklat_id), 'confirm' => 'Yakin ingin dihapus ?')); ?>
		</div>
	</div>
</div>


<h6>Jenis Diklat : <?php echo $model->nama_diklat; ?></h6>

<?php
$this->widget('zii.widgets.CDetailView', array(
	'data' => $model,
	'htmlOptions' => array('class' => 'table table-striped table-bordered'), // Bootstrap table styling
	'attributes' => array(
		'diklat_id',
		'nama_diklat',
		'tanggal_mulai',
		'tanggal_selesai',
	),
));
?>