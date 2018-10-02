<?php
$this->breadcrumbs=array(
	'Rz Kundens',
);

$this->menu=array(
	array('label'=>'Create RzKunden', 'url'=>array('create')),
	array('label'=>'Manage RzKunden', 'url'=>array('admin')),
);
?>

<h1>Rz Kundens</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
