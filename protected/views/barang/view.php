<?php
/* @var $this BarangController */
/* @var $model Barang */

$this->breadcrumbs=array(
	'Barangs'=>array('index'),
	$model->kodeBarang,
);

$this->menu=array(
	array('label'=>'List Barang', 'url'=>array('index')),
	array('label'=>'Create Barang', 'url'=>array('create')),
	array('label'=>'Update Barang', 'url'=>array('update', 'id'=>$model->kodeBarang)),
	array('label'=>'Delete Barang', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->kodeBarang),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Barang', 'url'=>array('admin')),
);
?>

<h1>View Barang #<?php echo $model->kodeBarang; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'kodeBarang',
		'namaBarang',
		'warna',
		'logo',
		'kondisi',
	),
)); ?>
