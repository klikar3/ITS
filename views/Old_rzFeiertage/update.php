<?php
$this->breadcrumbs=array(
	'Rz Feiertages'=>array('index'),
	$model->FId=>array('view','id'=>$model->FId),
	'Update',
);

$this->menu=array(
	array('label'=>'List RzFeiertage', 'url'=>array('index')),
	array('label'=>'Create RzFeiertage', 'url'=>array('create')),
	array('label'=>'View RzFeiertage', 'url'=>array('view', 'id'=>$model->FId)),
	array('label'=>'Manage RzFeiertage', 'url'=>array('admin')),
);
?>

<h1>Update RzFeiertage <?php echo $model->FId; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>