<?php
$this->breadcrumbs=array(
	'Rz Feiertages'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List RzFeiertage', 'url'=>array('index')),
	array('label'=>'Manage RzFeiertage', 'url'=>array('admin')),
);
?>

<h1>Create RzFeiertage</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>