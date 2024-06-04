<?php
$this->breadcrumbs=array(
	'Rz Kernzeitens',
);

$this->menu=array(
	array('label'=>'Create RzKernzeiten', 'url'=>array('create')),
	array('label'=>'Manage RzKernzeiten', 'url'=>array('admin')),
);
?>

<h1>Rz Kernzeitens</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
