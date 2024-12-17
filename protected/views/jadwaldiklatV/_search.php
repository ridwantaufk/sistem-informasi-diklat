<?php
/* @var $this JadwaldiklatVController */
/* @var $model JadwaldiklatV */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'jadwal_id'); ?>
		<?php echo $form->textField($model,'jadwal_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tanggal'); ?>
		<?php echo $form->textField($model,'tanggal'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'waktu_mulai'); ?>
		<?php echo $form->textField($model,'waktu_mulai'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'waktu_selesai'); ?>
		<?php echo $form->textField($model,'waktu_selesai'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nama_diklat'); ?>
		<?php echo $form->textField($model,'nama_diklat',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->