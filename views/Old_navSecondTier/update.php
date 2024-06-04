<?php
$this->breadcrumbs=array(
	'Nav Second Tiers'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List NavSecondTier', 'url'=>array('index')),
	array('label'=>'Create NavSecondTier', 'url'=>array('create')),
	array('label'=>'View NavSecondTier', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage NavSecondTier', 'url'=>array('admin')),
);
?>

<h1>Update NavSecondTier <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>