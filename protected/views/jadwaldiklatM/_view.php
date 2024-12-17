<?php
/* @var $this JadwaldiklatMController */
/* @var $data JadwaldiklatM */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('jadwal_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->jadwal_id), array('view', 'id'=>$data->jadwal_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('diklat_id')); ?>:</b>
	<?php echo CHtml::encode($data->diklat->nama_diklat); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tanggal')); ?>:</b>
	<?php echo CHtml::encode($data->tanggal); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('waktu_mulai')); ?>:</b>
	<?php echo CHtml::encode($data->waktu_mulai); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('waktu_selesai')); ?>:</b>
	<?php echo CHtml::encode($data->waktu_selesai); ?>
	<br />


</div>