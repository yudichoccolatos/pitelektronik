<?php
/* @var $this DetailserviceController */
/* @var $model Detailservice */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'detailservice-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'idLapor'); ?>
		<?php echo $form->textField($model,'idLapor'); ?>
		<?php echo $form->error($model,'idLapor'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'idDetail'); ?>
		<?php echo $form->textField($model,'idDetail'); ?>
		<?php echo $form->error($model,'idDetail'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'kodeBarang'); ?>
		<?php echo $form->textField($model,'kodeBarang'); ?>
		<?php echo $form->error($model,'kodeBarang'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tglLaporan'); ?>
		<?php echo $form->textField($model,'tglLaporan'); ?>
		<?php echo $form->error($model,'tglLaporan'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tglService'); ?>
		<?php echo $form->textField($model,'tglService'); ?>
		<?php echo $form->error($model,'tglService'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'indikasiKerusakan'); ?>
		<?php echo $form->textArea($model,'indikasiKerusakan',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'indikasiKerusakan'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'perbaikan'); ?>
		<?php echo $form->textArea($model,'perbaikan',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'perbaikan'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->