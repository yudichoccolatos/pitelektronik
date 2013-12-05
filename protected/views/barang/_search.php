<?php
/* @var $this BarangController */
/* @var $model Barang */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'kodeBarang'); ?>
		<?php echo $form->textField($model,'kodeBarang'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'namaBarang'); ?>
		<?php echo $form->textField($model,'namaBarang',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'kondisi'); ?>
		<?php echo $form->textField($model,'kondisi'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->