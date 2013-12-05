<?php
/* @var $this DetailserviceController */
/* @var $data Detailservice */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idDetail')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idDetail), array('view', 'id'=>$data->idDetail)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('idLapor')); ?>:</b>
	<?php echo CHtml::encode($data->idLapor); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('kodeBarang')); ?>:</b>
	<?php echo CHtml::encode($data->kodeBarang); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tglLaporan')); ?>:</b>
	<?php echo CHtml::encode($data->tglLaporan); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tglService')); ?>:</b>
	<?php echo CHtml::encode($data->tglService); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('indikasiKerusakan')); ?>:</b>
	<?php echo CHtml::encode($data->indikasiKerusakan); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('perbaikan')); ?>:</b>
	<?php echo CHtml::encode($data->perbaikan); ?>
	<br />


</div>