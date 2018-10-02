<?php
$this->breadcrumbs=array(
	'Rz Key Users'=>array('index'),
	$model->Kid,
);

$this->menu=array(
	array('label'=>'List RzKeyUser', 'url'=>array('index')),
	array('label'=>'Create RzKeyUser', 'url'=>array('create')),
	array('label'=>'Update RzKeyUser', 'url'=>array('update', 'id'=>$model->Kid)),
	array('label'=>'Delete RzKeyUser', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->Kid),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage RzKeyUser', 'url'=>array('admin')),
);
?>

<h1>View RzKeyUser #<?php echo $model->Kid; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'Kid',
		'System',
		'Kunde',
		'Standort',
		'email',
	),
)); ?>
