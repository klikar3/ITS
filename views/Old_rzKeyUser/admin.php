<?php
$this->breadcrumbs=array(
	'Rz Key Users'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List RzKeyUser', 'url'=>array('index')),
	array('label'=>'Create RzKeyUser', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('rz-key-user-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h2>KeyUser für Eskalationsmails verwaltens</h2>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'rz-key-user-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'Kid',
		'System',
		'Kunde',
		'Standort',
		'email',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
