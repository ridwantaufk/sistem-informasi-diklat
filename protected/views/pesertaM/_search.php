<?php
/* @var $this PesertaMController */
/* @var $model PesertaM */
/* @var $form CActiveForm */
?>

<style>
	.inputPesertaId {
    border: 1px solid #ced4da; /* Menambahkan border pada input */
    padding: 8px; /* Menambahkan padding untuk jarak teks dari batas kotak */
}
	.inputPesertaId:focus {
    border-color: #80bdff; /* Warna border saat fokus */
    box-shadow: 0 0 0 0.2rem rgba(0,123,255,.25); /* Efek shadow saat fokus */
    outline: 0; /* Menghilangkan outline default browser */
}
</style>

<div class="container"> <!-- Container Bootstrap -->
    <div class="card"> <!-- Menggunakan Card untuk menampilkan form -->
        <div class="card-body">
            <?php $form = $this->beginWidget('CActiveForm', array(
                'action' => Yii::app()->createUrl($this->route),
                'method' => 'get',
                'htmlOptions' => array('class' => 'form-horizontal'), // Menambahkan class 'form-horizontal' Bootstrap
            )); ?>

			<div class="form-group row">
				<?php echo $form->labelEx($model, 'peserta_id', array('class' => 'col-md-4 col-form-label')); ?>
				<div class="col-md-10">
					<?php echo $form->textField($model, 'peserta_id', array('class' => 'form-control inputPesertaId rounded')); ?>
				</div>
			</div>

            <div class="form-group row">
                <?php echo $form->labelEx($model, 'nama_peserta', array('class' => 'col-md-4 col-form-label')); ?>
                <div class="col-md-10">
                    <?php echo $form->textField($model, 'nama_peserta', array('class' => 'form-control inputPesertaId rounded', 'size' => 60, 'maxlength' => 100)); ?>
                </div>
            </div>

            <div class="form-group row">
                <?php echo $form->labelEx($model, 'alamat_peserta', array('class' => 'col-md-4 col-form-label')); ?>
                <div class="col-md-10">
                    <?php echo $form->textField($model, 'alamat_peserta', array('class' => 'form-control inputPesertaId rounded', 'size' => 60, 'maxlength' => 200)); ?>
                </div>
            </div>

            <div class="form-group row">
                <?php echo $form->labelEx($model, 'diklat_id', array('class' => 'col-md-4 col-form-label')); ?>
                <div class="col-md-10">
                    <?php echo $form->textField($model, 'diklat_id', array('class' => 'form-control inputPesertaId rounded')); ?>
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
<!-- search-form -->