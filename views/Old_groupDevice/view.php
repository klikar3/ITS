<?php
$this->breadcrumbs=array(
	'Group Devices'=>array('index'),
	$model->gdId,
);

$this->menu=array(
	array('label'=>'List GroupDevice', 'url'=>array('index')),
	array('label'=>'Create GroupDevice', 'url'=>array('create')),
	array('label'=>'Update GroupDevice', 'url'=>array('update', 'id'=>$model->gdId)),
	array('label'=>'Delete GroupDevice', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->gdId),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage GroupDevice', 'url'=>array('admin')),
);
?>

<h1>View GroupDevice #<?php echo $model->gdId; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'gdId',
		'Gruppe',
		'DeviceId',
		'Anteil',
	),
)); ?>
