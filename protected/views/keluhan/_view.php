<?php
/* @var $this KeluhanController */
/* @var $data Keluhan */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idLapor')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idLapor), array('view', 'id'=>$data->idLapor)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('kodeBarang')); ?>:</b>
	<?php echo CHtml::encode($data->kodeBarang); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('lokasiBarang')); ?>:</b>
	<?php echo CHtml::encode($data->lokasiBarang); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tglLapor')); ?>:</b>
	<?php echo CHtml::encode($data->tglLapor); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('berita')); ?>:</b>
	<?php echo CHtml::encode($data->berita); ?>
	<br />

</div>