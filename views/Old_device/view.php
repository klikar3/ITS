<?php
$this->breadcrumbs=array(
	'Devices'=>array('index'),
	$model->dId,
);

$this->menu=array(
	array('label'=>'List Device', 'url'=>array('index')),
	array('label'=>'Create Device', 'url'=>array('create')),
	array('label'=>'Update Device', 'url'=>array('update', 'id'=>$model->dId)),
	array('label'=>'Delete Device', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->dId),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Device', 'url'=>array('admin')),
);
?>

<h1>View Device #<?php echo $model->dId; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'dId',
		'Device',
		'DeviceId',
	),
)); ?>
