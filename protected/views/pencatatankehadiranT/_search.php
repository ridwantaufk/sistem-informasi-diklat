<?php
/* @var $this PencatatankehadiranTController */
/* @var $model PencatatankehadiranT */
/* @var $form CActiveForm */
?>

<style>
	.inputPesertaId {
		border: 1px solid #ced4da;
		/* Menambahkan border pada input */
		padding: 8px;
		/* Menambahkan padding untuk jarak teks dari batas kotak */
	}

	.inputPesertaId:focus {
		border-color: #80bdff;
		/* Warna border saat fokus */
		box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, .25);
		/* Efek shadow saat fokus */
		outline: 0;
		/* Menghilangkan outline default browser */
	}
</style>

<div class="container"> <!-- Container Bootstrap -->
	<div class="card"> <!-- Menggunakan Card untuk menampilkan form -->
		<div class="card-body">
			<?php $form = $this->beginWidget('CActiveForm', array(
				'action' => Yii::app()->createUrl($this->route),
				'method' => 'get',
			)); ?>


			<div class="form-group row">
				<?php echo $form->labelEx($model, 'catatan_id', array('class' => 'col-md-2 col-form-label')); ?>
				<div class="col-md-10">
					<?php echo $form->textField($model, 'catatan_id', array('class' => 'form-control inputPesertaId rounded')); ?>
				</div>
			</div>

			<div class="form-group row">
				<?php echo $form->labelEx($model, 'peserta_id', array('class' => 'col-md-2 col-form-label')); ?>
				<div class="col-md-10">
					<?php echo $form->textField($model, 'peserta_id', array('class' => 'form-control inputPesertaId rounded')); ?>
				</div>
			</div>

			<div class="form-group row">
				<?php echo $form->labelEx($model, 'jadwal_id', array('class' => 'col-md-2 col-form-label')); ?>
				<div class="col-md-10">
					<?php echo $form->textField($model, 'jadwal_id', array('class' => 'form-control inputPesertaId rounded')); ?>
				</div>
			</div>

			<div class="form-group row">
				<?php echo $form->labelEx($model, 'kehadiran', array('class' => 'col-md-2 col-form-label')); ?>
				<div class="col-md-10">
					<?php echo $form->checkBox($model, 'kehadiran', array('class' => 'inputPesertaId')); ?>
				</div>
			</div>


			<div class="form-group row">
				<div class="col-md-10 offset-md-2">
					<?php echo CHtml::submitButton('Search', array('class' => 'btn btn-primary')); ?>
				</div>
			</div>

			<?php $this->endWidget(); ?>

		</div>
	</div>
</div>