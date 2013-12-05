<?php
/* @var $this KeluhanController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Keluhans',
);

$this->menu=array(
	array('label'=>'Create Keluhan', 'url'=>array('create')),
	array('label'=>'Manage Keluhan', 'url'=>array('admin')),
);
?>

<h1>Keluhan</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
