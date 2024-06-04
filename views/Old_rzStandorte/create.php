<?php
$this->breadcrumbs=array(
	'Rz Standortes'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List RzStandorte', 'url'=>array('index')),
	array('label'=>'Manage RzStandorte', 'url'=>array('admin')),
);
?>

<h1>Create RzStandorte</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>