<?php
$this->breadcrumbs=array(
	'Group Devices'=>array('index'),
	$model->gdId=>array('view','id'=>$model->gdId),
	'Update',
);

$this->menu=array(
	array('label'=>'List GroupDevice', 'url'=>array('index')),
	array('label'=>'Create GroupDevice', 'url'=>array('create')),
	array('label'=>'View GroupDevice', 'url'=>array('view', 'id'=>$model->gdId)),
	array('label'=>'Manage GroupDevice', 'url'=>array('admin')),
);
?>

<h1>Update GroupDevice <?php echo $model->gdId; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>