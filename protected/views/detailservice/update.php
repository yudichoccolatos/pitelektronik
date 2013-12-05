<?php
/* @var $this DetailserviceController */
/* @var $model Detailservice */

$this->breadcrumbs=array(
	'Detailservices'=>array('index'),
	$model->idDetail=>array('view','id'=>$model->idDetail),
	'Update',
);

$this->menu=array(
	array('label'=>'List Detailservice', 'url'=>array('index')),
	array('label'=>'Create Detailservice', 'url'=>array('create')),
	array('label'=>'View Detailservice', 'url'=>array('view', 'id'=>$model->idDetail)),
	array('label'=>'Manage Detailservice', 'url'=>array('admin')),
);
?>

<h1>Update Detailservice <?php echo $model->idDetail; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>