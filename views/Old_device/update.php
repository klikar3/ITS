<?php
$this->breadcrumbs=array(
	'Devices'=>array('index'),
	$model->dId=>array('view','id'=>$model->dId),
	'Update',
);

$this->menu=array(
	array('label'=>'List Device', 'url'=>array('index')),
	array('label'=>'Create Device', 'url'=>array('create')),
	array('label'=>'View Device', 'url'=>array('view', 'id'=>$model->dId)),
	array('label'=>'Manage Device', 'url'=>array('admin')),
);
?>

<h1>Update Device <?php echo $model->dId; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>