<?php
/* @var $this LaporandiklatVController */
/* @var $data LaporandiklatV */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('nama_diklat')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->nama_diklat), array('view', 'id'=>$data->nama_diklat)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('total_peserta')); ?>:</b>
	<?php echo CHtml::encode($data->total_peserta); ?>
	<br />


</div>