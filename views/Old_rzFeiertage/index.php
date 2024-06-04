<?php
$this->breadcrumbs=array(
	'Rz Feiertages',
);

$this->menu=array(
	array('label'=>'Create RzFeiertage', 'url'=>array('create')),
	array('label'=>'Manage RzFeiertage', 'url'=>array('admin')),
);
?>

<h1>Rz Feiertages</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
