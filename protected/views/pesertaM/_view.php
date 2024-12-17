<?php
/* @var $this PesertaMController */
/* @var $data PesertaM */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('peserta_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->peserta_id), array('view', 'id'=>$data->peserta_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nama_peserta')); ?>:</b>
	<?php echo CHtml::encode($data->nama_peserta); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('alamat_peserta')); ?>:</b>
	<?php echo CHtml::encode($data->alamat_peserta); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('diklat_id')); ?>:</b>
	<?php echo CHtml::encode($data->diklat_id); ?>
	<br />


</div>