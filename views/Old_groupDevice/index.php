<?php
$this->breadcrumbs=array(
	'Group Devices',
);

$this->menu=array(
	array('label'=>'Create GroupDevice', 'url'=>array('create')),
	array('label'=>'Manage GroupDevice', 'url'=>array('admin')),
);
?>

<h1>Group Devices</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
