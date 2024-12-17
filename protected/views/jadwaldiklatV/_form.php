<?php
/* @var $this JadwaldiklatVController */
/* @var $model JadwaldiklatV */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'jadwaldiklat-v-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'jadwal_id'); ?>
		<?php echo $form->textField($model,'jadwal_id'); ?>
		<?php echo $form->error($model,'jadwal_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tanggal'); ?>
		<?php echo $form->textField($model,'tanggal'); ?>
		<?php echo $form->error($model,'tanggal'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'waktu_mulai'); ?>
		<?php echo $form->textField($model,'waktu_mulai'); ?>
		<?php echo $form->error($model,'waktu_mulai'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'waktu_selesai'); ?>
		<?php echo $form->textField($model,'waktu_selesai'); ?>
		<?php echo $form->error($model,'waktu_selesai'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nama_diklat'); ?>
		<?php echo $form->textField($model,'nama_diklat',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'nama_diklat'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->