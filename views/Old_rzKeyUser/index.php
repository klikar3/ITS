<?php
$this->breadcrumbs=array(
	'Rz Key Users',
);

$this->menu=array(
	array('label'=>'Create RzKeyUser', 'url'=>array('create')),
	array('label'=>'Manage RzKeyUser', 'url'=>array('admin')),
);
?>

<h1>Rz Key Users</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
