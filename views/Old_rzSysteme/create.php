<?php
$this->breadcrumbs=array(
	'Rz Systemes'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List RzSysteme', 'url'=>array('index')),
	array('label'=>'Manage RzSysteme', 'url'=>array('admin')),
);
?>

<h1>Create RzSysteme</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>