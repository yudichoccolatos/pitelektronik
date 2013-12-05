<?php
/* @var $this DetailserviceController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Detailservices',
);

$this->menu=array(
	array('label'=>'Create Detailservice', 'url'=>array('create')),
	array('label'=>'Manage Detailservice', 'url'=>array('admin')),
);
?>

<h1>Detailservices</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
