<?php
$this->breadcrumbs=array(
	'Group Devices'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List GroupDevice', 'url'=>array('index')),
	array('label'=>'Manage GroupDevice', 'url'=>array('admin')),
);
?>

<h1>Create GroupDevice</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>