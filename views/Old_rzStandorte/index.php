<?php
$this->breadcrumbs=array(
	'Rz Standortes',
);

$this->menu=array(
	array('label'=>'Create RzStandorte', 'url'=>array('create')),
	array('label'=>'Manage RzStandorte', 'url'=>array('admin')),
);
?>

<h1>Rz Standortes</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
