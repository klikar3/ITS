<?php
$this->breadcrumbs=array(
	'Rz Kundens'=>array('index'),
	$model->KId=>array('view','id'=>$model->KId),
	'Update',
);

$this->menu=array(
	array('label'=>'List RzKunden', 'url'=>array('index')),
	array('label'=>'Create RzKunden', 'url'=>array('create')),
	array('label'=>'View RzKunden', 'url'=>array('view', 'id'=>$model->KId)),
	array('label'=>'Manage RzKunden', 'url'=>array('admin')),
);
?>

<h1>Update RzKunden <?php echo $model->KId; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>