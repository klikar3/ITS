<?php
$this->breadcrumbs=array(
	'Rz Kundens'=>array('index'),
	$model->KId,
);

$this->menu=array(
	array('label'=>'List RzKunden', 'url'=>array('index')),
	array('label'=>'Create RzKunden', 'url'=>array('create')),
	array('label'=>'Update RzKunden', 'url'=>array('update', 'id'=>$model->KId)),
	array('label'=>'Delete RzKunden', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->KId),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage RzKunden', 'url'=>array('admin')),
);
?>

<h1>View RzKunden #<?php echo $model->KId; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'KId',
		'Kunde',
	),
)); ?>
