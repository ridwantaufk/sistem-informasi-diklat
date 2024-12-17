<?php
/* @var $this InfokehadiranVController */
/* @var $data InfokehadiranV */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('nama_peserta')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->nama_peserta), array('view', 'id'=>$data->nama_peserta)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('jadwal_tanggal')); ?>:</b>
	<?php echo CHtml::encode($data->jadwal_tanggal); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('jadwal_mulai')); ?>:</b>
	<?php echo CHtml::encode($data->jadwal_mulai); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('jadwal_selesai')); ?>:</b>
	<?php echo CHtml::encode($data->jadwal_selesai); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nama_diklat')); ?>:</b>
	<?php echo CHtml::encode($data->nama_diklat); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('kehadiran')); ?>:</b>
	<?php echo CHtml::encode($data->kehadiran); ?>
	<br />


</div>