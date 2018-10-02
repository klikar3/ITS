<?php
$this->breadcrumbs=array(
	'Rz Standortes'=>array('index'),
	$model->SId=>array('view','id'=>$model->SId),
	'Update',
);

$this->menu=array(
	array('label'=>'List RzStandorte', 'url'=>array('index')),
	array('label'=>'Create RzStandorte', 'url'=>array('create')),
	array('label'=>'View RzStandorte', 'url'=>array('view', 'id'=>$model->SId)),
	array('label'=>'Manage RzStandorte', 'url'=>array('admin')),
);
?>

<h1>Update RzStandorte <?php echo $model->SId; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>