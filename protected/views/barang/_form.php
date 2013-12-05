<?php
/* @var $this BarangController */
/* @var $model Barang */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'barang-form',
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
		<?php echo $form->labelEx($model,'namaBarang'); ?>
		<?php echo $form->textField($model,'namaBarang',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'namaBarang'); ?>
	</div>
    
    
    <div>
        <?php echo $form->labelEx($model,'warna'); ?>

        <?php echo $form->dropDownList($model,'warna',
        array('Hitam' =>'Hitam', 'Putih'=> 'Putih','Merah' =>'Merah', 'Kuning'=> 'Kuning'),

        array( 'onChange' => 'javascript:description()', 
                     'ajax'=>array(
                        'type'=>'POST',
                        'url'=>CController::createUrl('controllerBarang/functionWarna'),
                        'update'=>'warna',
        )));                         
        ?>
        <div id="status_id"></div>
        <?php echo $form->error($model,'warna'); ?>
    </div>

	<div>
        <?php echo $form->labelEx($model,'Logo Sticker'); ?>

        <?php echo $form->dropDownList($model,'logo',
        array('Green Tea' =>'Green Tea', 'Teh Botol'=> 'Teh Botol','Fruit Tea' =>'Fruit Tea', 'Tebs'=> 'Tebs'),

        array( 'onChange' => 'javascript:description()', 
                     'ajax'=>array(
                        'type'=>'POST',
                        'url'=>CController::createUrl('controllerBarang/functionLogo'),
                        'update'=>'logo',
        )));                         
        ?>
        <div id="status_id"></div>
        <?php echo $form->error($model,'warna'); ?>
    </div>
    
    
    
    
    

	
	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->