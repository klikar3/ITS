<?php
$this->breadcrumbs=array(
	'RZ-Report'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'RZ-Report erstellen', 'url'=>array('create')),
);
?>
<?php
Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('rz-report-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h2>Eintr&auml;ge im RZ-Report verwalten</h2>

<p>
Sie k&ouml;nnen bei der Suche am Anfang des Feldes einen der folgenden Vergleichsoperatoren verwenden: <b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>.
</p>
<?php echo CHtml::link('Erweiterte Suche','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'rz-report-grid',
	'dataProvider'=>$model->search(),
  'rowCssClassExpression'=>function($row, $data){
                if ($data->Freigegeben == 1)
                  $class = $row % 2 ? 'even-frei' : 'odd-frei';
                if ($data->Freigegeben == 0)
                  $class = $row % 2 ? 'even-unfrei' : 'odd-unfrei';
                if ($data->Wiedervorlage == 1)
                  $class = $row % 2 ? 'even-wieder' : 'odd-wieder';
                return $class;
        },
  'filter'=>$model,
	'columns'=>array(
		'Rid',
		'System',
    array(  // display 'create_time' using an expression
            'name'=>'von',
            'value'=>'date_create($data->von)->format("d.m.Y H:i")'
    ),
    array(  // display 'create_time' using an expression
            'name'=>'bis',
            'value'=>'date_create($data->bis)->format("d.m.Y H:i")'
    ),
		array(  'name'=>'Kunde',
            'value'=>'str_replace(",",", ",$data->Kunde)',
            //'headerHtmlOptions' => array('width'=> '420px')
    ),        
		array(  'name'=>'Betroffen',		
            'value'=>'str_replace(",",", ",$data->Betroffen)',
    ),        
		array(  'name'=>'Standort',
            'value'=>'str_replace(",",", ",$data->Standort)',
    ),
    array(  'name'=>'Beschreibung',
            'type'=>'html',
            'value'=>'"<div style=\"width:200px;\">" . $data->Beschreibung . "</div>"',
            //'headerHtmlOptions' => array('style'=>'width:220px;'),
            //'htmlOptions' => array('style'=>'word-wrap: break-word; width: 220px;'),
    ),
		'Aktion',
		'Loesung',
		'Wartung',
		'Intern',
		array(
			'class'=>'CButtonColumn',
      'header' => '<div style="width:60px;">Aufrufen</div>', 
      //'headerHtmlOptions' => array('style'=>'width:120px;'),
      //'htmlOptions' => array('style'=>'width:120px;')
		),
		
	),
  'summaryText'=>'Zeilen {start}-{end} von {count}, Seite {page} von {pages}'
)); ?>

