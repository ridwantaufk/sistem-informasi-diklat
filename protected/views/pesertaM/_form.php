<?php
/* @var $this PesertaMController */
/* @var $model PesertaM */
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

<div class="container">
	<div class="card">
		<div class="card-body">
			<?php $form = $this->beginWidget('CActiveForm', [
				'id' => 'peserta-m-form',
				'enableAjaxValidation' => false,
			]); ?>

			<p class="note">Fields with <span class="required">*</span> are required.</p>

			<?= $form->errorSummary($model); ?>

			<div class="form-group">
				<?= $form->labelEx($model, 'diklat_id'); ?>
				<?php
				$jadwalDiklatList = CHtml::listData(
					JadwaldiklatM::model()->with('diklat')->findAll(),
					'diklat.diklat_id',
					'diklat.nama_diklat'
				);
				echo $form->dropDownList($model, 'diklat_id', $jadwalDiklatList, [
					'class' => 'form-control inputPesertaId rounded',
					'prompt' => '-- Pilih Nama Diklat --',
				]);
				?>
				<?= $form->error($model, 'diklat_id'); ?>
			</div>

			<div class="form-group">
				<?= $form->labelEx($model, 'no_ktp'); ?>
				<?= $form->textField($model, 'no_ktp', ['class' => 'form-control inputPesertaId rounded', 'maxlength' => 20]); ?>
				<?= $form->error($model, 'no_ktp'); ?>
			</div>

			<div class="form-group">
				<?= $form->labelEx($model, 'nama_peserta'); ?>
				<?= $form->textField($model, 'nama_peserta', ['class' => 'form-control inputPesertaId rounded', 'maxlength' => 100]); ?>
				<?= $form->error($model, 'nama_peserta'); ?>
			</div>

			<div class="form-group">
				<?= $form->labelEx($model, 'alamat_peserta'); ?>
				<?= $form->textField($model, 'alamat_peserta', ['class' => 'form-control inputPesertaId rounded', 'maxlength' => 200]); ?>
				<?= $form->error($model, 'alamat_peserta'); ?>
			</div>

			<div class="form-group">
				<?= $form->labelEx($model, 'jenis_kelamin'); ?>
				<?= $form->dropDownList($model, 'jenis_kelamin', ['Laki-laki' => 'Laki-laki', 'Perempuan' => 'Perempuan'], [
					'class' => 'form-control inputPesertaId rounded',
					'prompt' => 'Pilih Jenis Kelamin',
				]); ?>
				<?= $form->error($model, 'jenis_kelamin'); ?>
			</div>

			<div class="form-group">
				<?= $form->labelEx($model, 'tanggal_lahir'); ?>
				<?php
				$this->widget('zii.widgets.jui.CJuiDatePicker', [
					'model' => $model,
					'attribute' => 'tanggal_lahir',
					'options' => [
						'dateFormat' => 'dd - MM - yy',
					],
					'htmlOptions' => [
						'class' => 'form-control inputPesertaId rounded',
						'placeholder' => 'dd / mm / yy',
					],
				]);
				?>
				<?= $form->error($model, 'tanggal_lahir'); ?>
			</div>

			<div class="form-group">
				<?= $form->labelEx($model, 'asal_instansi'); ?>
				<?= $form->textField($model, 'asal_instansi', ['class' => 'form-control inputPesertaId rounded', 'maxlength' => 100]); ?>
				<?= $form->error($model, 'asal_instansi'); ?>
			</div>

			<div class="form-group">
				<?= CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save', ['class' => 'btn btn-primary']); ?>
			</div>

			<?php $this->endWidget(); ?>
		</div>
	</div>
</div>