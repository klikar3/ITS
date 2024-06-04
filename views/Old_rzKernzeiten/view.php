<?php
$this->breadcrumbs=array(
	'Rz Kernzeitens'=>array('index'),
	$model->zId,
);

$this->menu=array(
	array('label'=>'List RzKernzeiten', 'url'=>array('index')),
	array('label'=>'Create RzKernzeiten', 'url'=>array('create')),
	array('label'=>'Update RzKernzeiten', 'url'=>array('update', 'id'=>$model->zId)),
	array('label'=>'Delete RzKernzeiten', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->zId),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage RzKernzeiten', 'url'=>array('admin')),
);
?>

<h1>View RzKernzeiten #<?php echo $model->zId; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'zId',
		'Mandant',
		'Wochentag',
		'Kernzeit_von',
		'Kernzeit_bis',
		'Tagesname',
	),
)); ?>
