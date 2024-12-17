<?php
/* @var $this PencatatankehadiranTController */
/* @var $model PencatatankehadiranT */
/* @var $form CActiveForm */
?>

<div class="form">

	<?php $form = $this->beginWidget('CActiveForm', array(
		'id' => 'pencatatankehadiran-t-form',
		// Please note: When you enable ajax validation, make sure the corresponding
		// controller action is handling ajax validation correctly.
		// There is a call to performAjaxValidation() commented in generated controller code.
		// See class documentation of CActiveForm for details on this.
		'enableAjaxValidation' => false,
	)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<!-- <div class="row">
		<?php /* echo $form->labelEx($model, 'peserta_id'); ?>
		<?php
		$pesertaList = CHtml::listData(PesertaM::model()->findAll(), 'peserta_id', 'nama_peserta');
		echo $form->dropDownList($model, 'peserta_id', $pesertaList, array('prompt' => 'Pilih Peserta'));
		?>
		<?php echo $form->error($model, 'peserta_id'); */ ?>
	</div> -->

	<div class="row">
		<?php echo $form->labelEx($model, 'peserta_id'); ?>
		<?php
		$pesertaList = CHtml::listData(PesertaM::model()->findAll(), 'peserta_id', 'nama_peserta');
		echo $form->dropDownList($model, 'peserta_id', $pesertaList, array(
			'prompt' => 'Pilih Peserta',
			'id' => 'peserta-dropdown',
		));
		?>
		<?php echo $form->error($model, 'peserta_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model, 'jadwal_id'); ?>
		<input type="date" id="jadwal-tanggal" class="form-control" disabled>
		<?php echo $form->error($model, 'jadwal_id'); ?>
		<?php echo $form->hiddenField($model, 'jadwal_id', array('id' => 'jadwal_id_hidden')); // Hidden field untuk menyimpan ID 
		?>
	</div>



	<?php
	Yii::app()->clientScript->registerScript('loadJadwal', "
		$('#peserta-dropdown').change(function() {
			var pesertaId = $(this).val();
			
			$.ajax({
				type: 'POST',
				url: '" . Yii::app()->createUrl('pencatatankehadiranT/loadtanggaljadwal') . "',
				data: {'peserta_id': pesertaId},
				success: function(data) {
					// Parse data sebagai JSON
                	var jsonData = JSON.parse(data);
					console.log(jsonData.tanggal + ' dan ' + jsonData.jadwal_id);
					// Set nilai yang ditampilkan di input field
					$('#jadwal-tanggal').val(jsonData.tanggal);
					
					// Set nilai yang disimpan di hidden field
					$('#jadwal_id_hidden').val(jsonData.jadwal_id);
				},
				error: function(jqXHR, textStatus, errorThrown) {
					console.error('AJAX Error: ' + textStatus, errorThrown);
				}
			});
		});
	");
	?>



	<!-- <div class="row">
		<?php // echo $form->labelEx($model, 'jadwal_id'); 
		?>
		<?php // echo $form->textField($model, 'jadwal_id'); 
		?>
		<?php // echo $form->error($model, 'jadwal_id'); 
		?>
	</div> -->



	<div class="form-group row align-items-center">
		<?php echo $form->labelEx($model, 'kehadiran', ['class' => 'col-form-label']); ?>
		<div class="form-check">
			<?php echo $form->checkBox($model, 'kehadiran', ['class' => 'form-check-input', 'id' => 'kehadiran-checkbox']); ?>
			<?php echo $form->error($model, 'kehadiran', ['class' => 'form-check-label']); ?>
		</div>
	</div>


	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

	<?php $this->endWidget(); ?>

</div><!-- form -->