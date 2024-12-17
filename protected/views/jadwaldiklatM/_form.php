<?php
/* @var $this JadwaldiklatMController */
/* @var $model JadwaldiklatM */
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
			<?php
			$form = $this->beginWidget('CActiveForm', array(
				'id' => 'jadwaldiklat-m-form',
				'enableAjaxValidation' => false,
				'htmlOptions' => array('class' => 'needs-validation', 'novalidate' => ''),
			));
			?>

			<p class="note">Fields with <span class="required">*</span> are required.</p>

			<?php echo $form->errorSummary($model, array('class' => 'alert alert-danger')); ?>

			<div class="form-group row">
				<?php echo $form->labelEx($model, 'diklat_id', array('class' => 'col-md-3 col-form-label')); ?>
				<div class="col-md-9">
					<?php echo $form->dropDownList($model, 'diklat_id', $diklatList, array('empty' => '-- Pilih Diklat --', 'class' => 'form-control insertPesertaId rounded', 'onchange' => 'setStartDate()')); ?>
					<?php echo $form->error($model, 'diklat_id', array('class' => 'invalid-feedback')); ?>
				</div>
			</div>

			<div class="form-group row">
				<?php echo $form->labelEx($model, 'tanggal', array('class' => 'col-md-3 col-form-label')); ?>
				<div class="col-md-9">
					<?php $this->widget('zii.widgets.jui.CJuiDatePicker', array(
						'model' => $model,
						'attribute' => 'tanggal',
						'options' => array(
							'dateFormat' => 'dd - MM - yy',
						),
						'htmlOptions' => array(
							'class' => 'form-control insertPesertaId rounded',
							'placeholder' => 'dd / mm / yy',
						),
					)); ?>
					<?php echo $form->error($model, 'tanggal', array('class' => 'invalid-feedback')); ?>
				</div>
			</div>

			<script>
				function setStartDate() {
					var diklatId = $('#JadwaldiklatM_diklat_id').val();
					if (diklatId) {
						$.ajax({
							url: '<?php echo $this->createUrl("jadwaldiklatM/getStartDate"); ?>',
							type: 'GET',
							data: {
								diklatId: diklatId
							},
							success: function(response) {
								if (response) {
									var startDate = new Date(response);
									startDate.setDate(startDate.getDate());
									$('#JadwaldiklatM_tanggal').datepicker('setDate', startDate);
								}
							}
						});
					}
				}
			</script>

			<div class="form-group row">
				<?php echo $form->labelEx($model, 'waktu_mulai', array('class' => 'col-md-3 col-form-label')); ?>
				<div class="col-md-9">
					<?php
					$formattedTime = date('H:i', strtotime($model->waktu_mulai));
					echo CHtml::tag('input', array(
						'type' => 'time',
						'name' => CHtml::activeName($model, 'waktu_mulai'),
						'value' => $formattedTime,
						'class' => 'form-control insertPesertaId rounded',
					));
					?>
					<?php echo $form->error($model, 'waktu_mulai', array('class' => 'invalid-feedback')); ?>
				</div>
			</div>

			<div class="form-group row">
				<?php echo $form->labelEx($model, 'waktu_selesai', array('class' => 'col-md-3 col-form-label')); ?>
				<div class="col-md-9">
					<?php
					$formattedTime = date('H:i', strtotime($model->waktu_selesai));
					echo CHtml::tag('input', array(
						'type' => 'time',
						'name' => CHtml::activeName($model, 'waktu_selesai'),
						'value' => $formattedTime,
						'class' => 'form-control insertPesertaId rounded',
					)); ?>
					<?php echo $form->error($model, 'waktu_selesai', array('class' => 'invalid-feedback')); ?>
				</div>
			</div>

			<div class="form-group row">
				<div class="col-md-9 offset-md-3">
					<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save', array('class' => 'btn btn-primary')); ?>
				</div>
			</div>

			<?php $this->endWidget(); ?>
		</div>
	</div>
</div>