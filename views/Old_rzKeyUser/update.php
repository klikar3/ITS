<?php
$this->breadcrumbs=array(
	'Rz Key Users'=>array('index'),
	$model->Kid=>array('view','id'=>$model->Kid),
	'Update',
);

$this->menu=array(
	array('label'=>'List RzKeyUser', 'url'=>array('index')),
	array('label'=>'Create RzKeyUser', 'url'=>array('create')),
	array('label'=>'View RzKeyUser', 'url'=>array('view', 'id'=>$model->Kid)),
	array('label'=>'Manage RzKeyUser', 'url'=>array('admin')),
);
?>

<h1>Update RzKeyUser <?php echo $model->Kid; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>