<?php
$this->breadcrumbs=array(
	'Rz Feiertages'=>array('index'),
	$model->FId,
);

$this->menu=array(
	array('label'=>'List RzFeiertage', 'url'=>array('index')),
	array('label'=>'Create RzFeiertage', 'url'=>array('create')),
	array('label'=>'Update RzFeiertage', 'url'=>array('update', 'id'=>$model->FId)),
	array('label'=>'Delete RzFeiertage', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->FId),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage RzFeiertage', 'url'=>array('admin')),
);
?>

<h1>View RzFeiertage #<?php echo $model->FId; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'FId',
		'Datum',
		'Desc',
	),
)); ?>
