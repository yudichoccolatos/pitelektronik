<?php
/* @var $this DetailserviceController */
/* @var $model Detailservice */

$this->breadcrumbs=array(
	'Detailservices'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Detailservice', 'url'=>array('index')),
	array('label'=>'Manage Detailservice', 'url'=>array('admin')),
);
?>

<h1>Create Detailservice</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>