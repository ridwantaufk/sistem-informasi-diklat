<?php
/* @var $this InfokehadiranVController */
/* @var $model InfokehadiranV */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'infokehadiran-v-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'nama_peserta'); ?>
		<?php echo $form->textField($model,'nama_peserta',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'nama_peserta'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'jadwal_tanggal'); ?>
		<?php echo $form->textField($model,'jadwal_tanggal'); ?>
		<?php echo $form->error($model,'jadwal_tanggal'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'jadwal_mulai'); ?>
		<?php echo $form->textField($model,'jadwal_mulai'); ?>
		<?php echo $form->error($model,'jadwal_mulai'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'jadwal_selesai'); ?>
		<?php echo $form->textField($model,'jadwal_selesai'); ?>
		<?php echo $form->error($model,'jadwal_selesai'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nama_diklat'); ?>
		<?php echo $form->textField($model,'nama_diklat',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'nama_diklat'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'kehadiran'); ?>
		<?php echo $form->checkBox($model,'kehadiran'); ?>
		<?php echo $form->error($model,'kehadiran'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->