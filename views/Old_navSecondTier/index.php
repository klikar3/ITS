<?php
$this->breadcrumbs=array(
	'Nav Second Tiers',
);

$this->menu=array(
	array('label'=>'Create NavSecondTier', 'url'=>array('create')),
	array('label'=>'Manage NavSecondTier', 'url'=>array('admin')),
);
?>

<h1>Nav Second Tiers</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
