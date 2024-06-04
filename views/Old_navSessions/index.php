<?php
$this->breadcrumbs=array(
	'Nav Sessions',
);?>
<h3>Navision Sessions pro ServiceTier</h3>

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'nav-session-grid',
	'dataProvider'=>$dataprovider,
//	'filter'=>$model,
	'columns'=>array(
		'ServerComputerName',
		'Anzahl',
	),
)); ?>
