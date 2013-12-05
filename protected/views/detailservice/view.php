<?php
/* @var $this DetailserviceController */
/* @var $model Detailservice */

$this->breadcrumbs=array(
	'Detailservices'=>array('index'),
	$model->idDetail,
);

$this->menu=array(
	array('label'=>'List Detailservice', 'url'=>array('index')),
	array('label'=>'Create Detailservice', 'url'=>array('create')),
	array('label'=>'Update Detailservice', 'url'=>array('update', 'id'=>$model->idDetail)),
	array('label'=>'Delete Detailservice', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idDetail),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Detailservice', 'url'=>array('admin')),
);
?>

<h1>View Detailservice #<?php echo $model->idDetail; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idLapor',
		'idDetail',
		'kodeBarang',
		'tglLaporan',
		'tglService',
		'indikasiKerusakan',
		'perbaikan',
	),
)); ?>
