<?php
/* @var $this BarangController */
/* @var $data Barang */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('kodeBarang')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->kodeBarang), array('view', 'id'=>$data->kodeBarang)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('namaBarang')); ?>:</b>
	<?php echo CHtml::encode($data->namaBarang); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('kondisi')); ?>:</b>
	<?php echo CHtml::encode($data->kondisi); ?>
	<br />
    
    
	<b><?php echo $form->listBox($model,'warna',CHtml::listData($pmodel,'warna','description'),array('multiple'=>'multiple','size'=>'10','options'=>array(  'Beer'=>array('selected'=>'selected'), 'Wine'=>array('selected'=>'selected') ))); ?>
    </b>	


</div>