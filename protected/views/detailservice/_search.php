<?php
/* @var $this DetailserviceController */
/* @var $model Detailservice */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'idLapor'); ?>
		<?php echo $form->textField($model,'idLapor'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'idDetail'); ?>
		<?php echo $form->textField($model,'idDetail'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'kodeBarang'); ?>
		<?php echo $form->textField($model,'kodeBarang'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tglLaporan'); ?>
		<?php echo $form->textField($model,'tglLaporan'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tglService'); ?>
		<?php echo $form->textField($model,'tglService'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'indikasiKerusakan'); ?>
		<?php echo $form->textArea($model,'indikasiKerusakan',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'perbaikan'); ?>
		<?php echo $form->textArea($model,'perbaikan',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->