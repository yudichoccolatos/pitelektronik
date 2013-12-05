<?php
/* @var $this KeluhanController */
/* @var $model Keluhan */

$this->breadcrumbs=array(
	'Keluhans'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Keluhan', 'url'=>array('index')),
	array('label'=>'Create Keluhan', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#keluhan-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Keluhan</h1>



<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'keluhan-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'idLapor',
		'kodeBarang',
		'lokasiBarang',
		'tglLapor',
		'berita',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
