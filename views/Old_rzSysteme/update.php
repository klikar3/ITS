<?php
$this->breadcrumbs=array(
	'Rz Systemes'=>array('index'),
	$model->SId=>array('view','id'=>$model->SId),
	'Update',
);

$this->menu=array(
	array('label'=>'List RzSysteme', 'url'=>array('index')),
	array('label'=>'Create RzSysteme', 'url'=>array('create')),
	array('label'=>'View RzSysteme', 'url'=>array('view', 'id'=>$model->SId)),
	array('label'=>'Manage RzSysteme', 'url'=>array('admin')),
);
?>

<h1>Update RzSysteme <?php echo $model->SId; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>