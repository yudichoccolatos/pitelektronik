<?php
/* @var $this KeluhanController */
/* @var $model Keluhan */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'keluhan-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'kodeBarang'); ?>
		<?php echo $form->textField($model,'kodeBarang'); ?>
		<?php echo $form->error($model,'kodeBarang'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'lokasiBarang'); ?>
		<?php echo $form->textField($model,'lokasiBarang',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'lokasiBarang'); ?>
	</div>

	

	<div class="row">
		<?php echo $form->labelEx($model,'berita'); ?>
		<?php echo $form->textArea($model,'berita',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'berita'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->