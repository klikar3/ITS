<?php
$this->breadcrumbs=array(
	'Nav Second Tiers'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List NavSecondTier', 'url'=>array('index')),
	array('label'=>'Manage NavSecondTier', 'url'=>array('admin')),
);
?>

<h1>Create NavSecondTier</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>