<?php
$this->breadcrumbs=array(
	'RZ-Report',
);

$this->menu=array(
	array('label'=>'Neuer Eintrag', 'url'=>array('create')),
	array('label'=>'Eintraege verwalten', 'url'=>array('admin')),
);
?>

<h1>Rz Reports</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
