<?php
/* @var $this InfokehadiranVController */
/* @var $model InfokehadiranV */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'nama_peserta'); ?>
		<?php echo $form->textField($model,'nama_peserta',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'jadwal_tanggal'); ?>
		<?php echo $form->textField($model,'jadwal_tanggal'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'jadwal_mulai'); ?>
		<?php echo $form->textField($model,'jadwal_mulai'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'jadwal_selesai'); ?>
		<?php echo $form->textField($model,'jadwal_selesai'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nama_diklat'); ?>
		<?php echo $form->textField($model,'nama_diklat',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'kehadiran'); ?>
		<?php echo $form->checkBox($model,'kehadiran'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->