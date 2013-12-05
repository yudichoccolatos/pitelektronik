<?php
/* @var $this KeluhanController */
/* @var $model Keluhan */
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
		<?php echo $form->label($model,'kodeBarang'); ?>
		<?php echo $form->textField($model,'kodeBarang'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'lokasiBarang'); ?>
		<?php echo $form->textField($model,'lokasiBarang',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tglLapor'); ?>
		<?php echo $form->textField($model,'tglLapor'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'berita'); ?>
		<?php echo $form->textArea($model,'berita',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->