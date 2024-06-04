<?php
$this->breadcrumbs=array(
	'Rz Kernzeitens'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List RzKernzeiten', 'url'=>array('index')),
	array('label'=>'Manage RzKernzeiten', 'url'=>array('admin')),
);
?>

<h1>Create RzKernzeiten</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>