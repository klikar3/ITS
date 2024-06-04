<?php
$this->breadcrumbs=array(
	'Rz Standortes'=>array('index'),
	$model->SId,
);

$this->menu=array(
	array('label'=>'List RzStandorte', 'url'=>array('index')),
	array('label'=>'Create RzStandorte', 'url'=>array('create')),
	array('label'=>'Update RzStandorte', 'url'=>array('update', 'id'=>$model->SId)),
	array('label'=>'Delete RzStandorte', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->SId),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage RzStandorte', 'url'=>array('admin')),
);
?>

<h1>View RzStandorte #<?php echo $model->SId; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'SId',
		'Standort',
	),
)); ?>
