<?php
/* @var $this PesertaMController */
/* @var $model PesertaM */
/* @var $form CActiveForm */
?>

<div class="form">

    <?php $form = $this->beginWidget('CActiveForm', array(
        'id' => 'peserta-m-form',
        // Please note: When you enable ajax validation, make sure the corresponding
        // controller action is handling ajax validation correctly.
        // There is a call to performAjaxValidation() commented in generated controller code.
        // See class documentation of CActiveForm for details on this.
        'enableAjaxValidation' => false,
    )); ?>

    <p class="note">Fields with <span class="required">*</span> are required.</p>

    <?php echo $form->errorSummary($model); ?>

    <div class="row">
        <?php echo $form->labelEx($model, 'diklat_id'); ?>
        <?php
        // Ambil data untuk dropdownlist dari jadwaldiklat_m yang terhubung dengan diklat_m
        $jadwalDiklatList = CHtml::listData(
            JadwaldiklatM::model()->with('diklat')->findAll(),
            'diklat.diklat_id',
            'diklat.nama_diklat'
        );
        echo $form->dropDownList($model, 'diklat_id', $jadwalDiklatList, array('empty' => '--Pilih Nama Diklat--'));
        ?>
        <?php echo $form->error($model, 'diklat_id'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model, 'no_ktp'); ?>
        <?php echo $form->textField($model, 'no_ktp', array('size' => 60, 'maxlength' => 20)); ?>
        <?php echo $form->error($model, 'no_ktp'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model, 'nama_peserta'); ?>
        <?php echo $form->textField($model, 'nama_peserta', array('size' => 60, 'maxlength' => 100)); ?>
        <?php echo $form->error($model, 'nama_peserta'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model, 'alamat_peserta'); ?>
        <?php echo $form->textField($model, 'alamat_peserta', array('size' => 60, 'maxlength' => 200)); ?>
        <?php echo $form->error($model, 'alamat_peserta'); ?>
    </div>


    <div class="row">
        <?php echo $form->labelEx($model, 'jenis_kelamin'); ?>
        <?php echo $form->dropDownList($model, 'jenis_kelamin', array('Laki-laki' => 'Laki-laki', 'Perempuan' => 'Perempuan'), array('empty' => 'Pilih Jenis Kelamin')); ?>
        <?php echo $form->error($model, 'jenis_kelamin'); ?>
    </div>


    <div class="row">
        <?php echo $form->labelEx($model, 'tanggal_lahir'); ?>
        <?php $this->widget('zii.widgets.jui.CJuiDatePicker', array(
            'model' => $model,
            'attribute' => 'tanggal_lahir',
            'options' => array(
                // 'dateFormat' => 'yy-mm-dd',
                'dateFormat' => 'dd - MM - yy',
            ),
            'htmlOptions' => array(
                'placeholder' => 'dd / mm / yy',
            ),
        )); ?>
        <?php echo $form->error($model, 'tanggal_lahir'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model, 'asal_instansi'); ?>
        <?php echo $form->textField($model, 'asal_instansi', array('size' => 60, 'maxlength' => 100)); ?>
        <?php echo $form->error($model, 'asal_instansi'); ?>
    </div>



    <div class="row buttons">
        <?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
    </div>

    <?php $this->endWidget(); ?>

</div><!-- form -->