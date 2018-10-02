

<h3>Interflex-Zeiten f&uuml;r <?php echo $_SERVER["AUTH_USER"];?></h3>
<div style="width:30%;">
<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'interflex-grid',
	'dataProvider'=>$dataProvider,
//	'filter'=>$model,
	'columns'=>array(
		'WorkDate',
		'H',
		'M',
		'HM',
	),
  'htmlOptions' => array(
    'width' => '50%',
  )
));

/*php $this->widget('zii.widgets.CGridView', array(
	'dataProvider'=>$dataProvider,
//	'itemView'=>'_view',
));*/ ?>
 </div>