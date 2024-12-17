<?php
/* @var $this PesertaMController */
/* @var $model PesertaM */

$this->breadcrumbs=array(
	'Peserta Ms'=>array('index'),
	$model->peserta_id,
);

$this->menu=array(
	array('label'=>'List PesertaM', 'url'=>array('index')),
	array('label'=>'Create PesertaM', 'url'=>array('create')),
	array('label'=>'Update PesertaM', 'url'=>array('update', 'id'=>$model->peserta_id)),
	array('label'=>'Delete PesertaM', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->peserta_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage PesertaM', 'url'=>array('admin')),
);
?>

<h1>View PesertaM #<?php echo $model->peserta_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
    'data' => $model,
    'attributes' => array(
        'peserta_id',
        'no_ktp',
        'nama_peserta',
        'tanggal_lahir',
        'jenis_kelamin',
        'alamat_peserta',
        'asal_instansi',
        array(
            'name' => 'diklat_id',
            'value' => $model->diklat->nama_diklat,
        ),
    ),
)); ?>

