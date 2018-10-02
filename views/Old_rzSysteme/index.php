<?php
$this->breadcrumbs=array(
	'Rz Systemes',
);

$this->menu=array(
	array('label'=>'Create RzSysteme', 'url'=>array('create')),
	array('label'=>'Manage RzSysteme', 'url'=>array('admin')),
);
?>

<h1>Rz Systemes</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
