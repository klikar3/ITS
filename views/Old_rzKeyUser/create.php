<?php
$this->breadcrumbs=array(
	'Rz Key Users'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List RzKeyUser', 'url'=>array('index')),
	array('label'=>'Manage RzKeyUser', 'url'=>array('admin')),
);
?>

<h1>Create RzKeyUser</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>