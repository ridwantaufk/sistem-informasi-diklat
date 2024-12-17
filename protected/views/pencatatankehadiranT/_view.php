<?php
/* @var $this PencatatankehadiranTController */
/* @var $data PencatatankehadiranT */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('catatan_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->catatan_id), array('view', 'id'=>$data->catatan_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('peserta_id')); ?>:</b>
	<?php echo CHtml::encode($data->peserta_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('jadwal_id')); ?>:</b>
	<?php echo CHtml::encode($data->jadwal_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('kehadiran')); ?>:</b>
	<?php echo CHtml::encode($data->kehadiran); ?>
	<br />


</div>