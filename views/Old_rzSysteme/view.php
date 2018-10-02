<?php
$this->breadcrumbs=array(
	'Rz Systemes'=>array('index'),
	$model->SId,
);

$this->menu=array(
	array('label'=>'List RzSysteme', 'url'=>array('index')),
	array('label'=>'Create RzSysteme', 'url'=>array('create')),
	array('label'=>'Update RzSysteme', 'url'=>array('update', 'id'=>$model->SId)),
	array('label'=>'Delete RzSysteme', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->SId),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage RzSysteme', 'url'=>array('admin')),
);
?>

<h1>View RzSysteme #<?php echo $model->SId; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'SId',
		'System',
	),
)); ?>
