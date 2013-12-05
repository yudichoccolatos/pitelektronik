<?php
/* @var $this KeluhanController */
/* @var $model Keluhan */

$this->breadcrumbs=array(
	'Keluhans'=>array('index'),
	$model->idLapor=>array('view','id'=>$model->idLapor),
	'Update',
);

$this->menu=array(
	array('label'=>'List Keluhan', 'url'=>array('index')),
	array('label'=>'Create Keluhan', 'url'=>array('create')),
	array('label'=>'View Keluhan', 'url'=>array('view', 'id'=>$model->idLapor)),
	array('label'=>'Manage Keluhan', 'url'=>array('admin')),
);
?>

<h1>Update Keluhan <?php echo $model->idLapor; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>