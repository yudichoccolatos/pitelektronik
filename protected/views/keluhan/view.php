<?php
/* @var $this KeluhanController */
/* @var $model Keluhan */

$this->breadcrumbs=array(
	'Keluhans'=>array('index'),
	$model->idLapor,
);

$this->menu=array(
	array('label'=>'List Keluhan', 'url'=>array('index')),
	array('label'=>'Create Keluhan', 'url'=>array('create')),
	array('label'=>'Update Keluhan', 'url'=>array('update', 'id'=>$model->idLapor)),
	array('label'=>'Delete Keluhan', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idLapor),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Keluhan', 'url'=>array('admin')),
);
?>

<h1>View Keluhan #<?php echo $model->idLapor; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idLapor',
		'kodeBarang',
		'lokasiBarang',
		'tglLapor',
		'berita',
	),
)); ?>
