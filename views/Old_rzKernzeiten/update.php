<?php
$this->breadcrumbs=array(
	'Rz Kernzeitens'=>array('index'),
	$model->zId=>array('view','id'=>$model->zId),
	'Update',
);

$this->menu=array(
	array('label'=>'List RzKernzeiten', 'url'=>array('index')),
	array('label'=>'Create RzKernzeiten', 'url'=>array('create')),
	array('label'=>'View RzKernzeiten', 'url'=>array('view', 'id'=>$model->zId)),
	array('label'=>'Manage RzKernzeiten', 'url'=>array('admin')),
);
?>

<h1>Update RzKernzeiten <?php echo $model->zId; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>