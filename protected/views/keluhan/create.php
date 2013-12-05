<?php
/* @var $this KeluhanController */
/* @var $model Keluhan */

$this->breadcrumbs=array(
	'Keluhans'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Keluhan', 'url'=>array('index')),
	array('label'=>'Manage Keluhan', 'url'=>array('admin')),
);
?>

<h1>Create Keluhan</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>