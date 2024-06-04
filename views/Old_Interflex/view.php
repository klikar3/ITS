<?php
$this->breadcrumbs=array(
	'InterflexZeiten'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List NavSecondTier', 'url'=>array('index')),
	array('label'=>'Create NavSecondTier', 'url'=>array('create')),
	array('label'=>'Update NavSecondTier', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete NavSecondTier', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage NavSecondTier', 'url'=>array('admin')),
);
?>

<h1>View NavSecondTier #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		WorkDate, PersonnelNo, ResourceNo, Name, DailyHoursofWork, DailyAbsencefromWork, DailyIdleTime
	),
)); ?>
