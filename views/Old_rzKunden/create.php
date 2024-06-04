<?php
$this->breadcrumbs=array(
	'Rz Kundens'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List RzKunden', 'url'=>array('index')),
	array('label'=>'Manage RzKunden', 'url'=>array('admin')),
);
?>

<h1>Create RzKunden</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>