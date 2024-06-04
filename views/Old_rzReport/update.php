<?php
$this->breadcrumbs=array(
	'Rz Reports'=>array('index'),
	$model->Rid=>array('view','id'=>$model->Rid),
	'Update',
);

$this->menu=array(
	array('label'=>'Eintrag erstellen', 'url'=>array('create')),
	array('label'=>'Einträge verwalten', 'url'=>array('admin')),
);
?>

<h2>&Auml;ndere Eintrag <?php echo $model->Rid; ?> im RZ-Report </h2>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>