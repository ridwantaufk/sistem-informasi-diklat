<?php
/* @var $this DiklatMController */
/* @var $data DiklatM */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('diklat_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->diklat_id), array('view', 'id'=>$data->diklat_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nama_diklat')); ?>:</b>
	<?php echo CHtml::encode($data->nama_diklat); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tanggal_mulai')); ?>:</b>
	<?php echo CHtml::encode($data->tanggal_mulai); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tanggal_selesai')); ?>:</b>
	<?php echo CHtml::encode($data->tanggal_selesai); ?>
	<br />


</div>