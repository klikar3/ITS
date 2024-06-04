<?php
$this->breadcrumbs=array(
	'Rz Reports'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'Einträge verwalten', 'url'=>array('admin')),
);
?>

<h2>Neuen Eintrag im RZ-Report erstellen</h2>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>