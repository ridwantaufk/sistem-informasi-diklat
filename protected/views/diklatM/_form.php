<?php
/* @var $this DiklatMController */
/* @var $model DiklatM */
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
        'id' => 'diklat-m-form',
        'enableAjaxValidation' => false,
        'htmlOptions' => array('class' => 'needs-validation', 'novalidate' => ''),
      ));
      ?>

      <p class="note">Fields with <span class="required">*</span> are required.</p>

      <?php echo $form->errorSummary($model, array('class' => 'alert alert-danger')); ?>

      <div class="form-group row">
        <?php echo $form->labelEx($model, 'nama_diklat', array('class' => 'col-md-3 col-form-label')); ?>
        <div class="col-md-9">
          <?php echo $form->textField($model, 'nama_diklat', array('class' => 'form-control inputPesertaId rounded', 'placeholder' => 'Nama Diklat', 'required' => 'required')); ?>
          <?php echo $form->error($model, 'nama_diklat', array('class' => 'invalid-feedback')); ?>
        </div>
      </div>

      <div class="form-group row">
        <?php echo $form->labelEx($model, 'tanggal_mulai', array('class' => 'col-md-3 col-form-label')); ?>
        <div class="col-md-9">
          <?php $this->widget('zii.widgets.jui.CJuiDatePicker', array(
            'model' => $model,
            'attribute' => 'tanggal_mulai',
            'options' => array(
              'dateFormat' => 'yy-mm-dd',
            ),
            'htmlOptions' => array(
              'class' => 'form-control inputPesertaId rounded',
              'placeholder' => 'Masukkan Tanggal Mulai',
              'required' => 'required'
            ),
          )); ?>
          <?php echo $form->error($model, 'tanggal_mulai', array('class' => 'invalid-feedback')); ?>
        </div>
      </div>

      <div class="form-group row">
        <?php echo $form->labelEx($model, 'tanggal_selesai', array('class' => 'col-md-3 col-form-label')); ?>
        <div class="col-md-9">
          <?php $this->widget('zii.widgets.jui.CJuiDatePicker', array(
            'model' => $model,
            'attribute' => 'tanggal_selesai',
            'options' => array(
              'dateFormat' => 'yy-mm-dd',
            ),
            'htmlOptions' => array(
              'class' => 'form-control inputPesertaId rounded',
              'placeholder' => 'Masukkan Tanggal Selesai',
              'required' => 'required'
            ),
          )); ?>
          <?php echo $form->error($model, 'tanggal_selesai', array('class' => 'invalid-feedback')); ?>
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