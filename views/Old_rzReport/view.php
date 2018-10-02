<?php
$this->breadcrumbs=array(
	'Rz Reports'=>array('index'),
	$model->Rid,
);

$this->menu=array(
	array('label'=>'List RzReport', 'url'=>array('index')),
	array('label'=>'Create RzReport', 'url'=>array('create')),
	array('label'=>'Update RzReport', 'url'=>array('update', 'id'=>$model->Rid)),
	array('label'=>'Delete RzReport', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->Rid),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage RzReport', 'url'=>array('admin')),
);
?>

<h1>View RzReport #<?php echo $model->Rid; ?></h1>

<?php /*$this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'Rid',
		'System',
		'von',
		'bis',
		'Kunde',
		'Prio',
		'Schwere',
		'Beschreibung',
		'Aktion',
		'Loesung',
		'Wartung',
		'Intern',
    'Author',
    'Korrektor',
	),
)); */ ?>    

<div class="view">
   <table class="detail-view"><tr class="even"> <td>

	<b><?php echo CHtml::encode($model->getAttributeLabel('Rid')); ?>:</b><br>
	<?php echo CHtml::link(CHtml::encode($model->Rid), array('view', 'id'=>$model->Rid)); ?>
  </td></td><td></td><td></tr><tr class="odd"><td>

	<b><?php echo CHtml::encode($model->getAttributeLabel('System')); ?>:</b><br>
	<?php echo CHtml::encode($model->System); ?>
  </td><td>

	<b><?php echo CHtml::encode($model->getAttributeLabel('von')); ?>:</b> <br>
	<?php echo CHtml::encode($model->von); ?>
  </td><td>

	<b><?php echo CHtml::encode($model->getAttributeLabel('bis')); ?>:</b> <br>
	<?php echo CHtml::encode($model->bis); ?>
	</td></tr><tr class="even"><td>

	<b><?php echo CHtml::encode($model->getAttributeLabel('Kunde')); ?>:</b><br>
	<?php echo CHtml::encode($model->Kunde); ?>
	</td><td>

	<b><?php echo CHtml::encode($model->getAttributeLabel('Author')); ?>:</b> <br>
	<?php echo CHtml::encode($model->Author); ?>
  </td><td>

	<b><?php echo CHtml::encode($model->getAttributeLabel('Korrektor')); ?>:</b><br>
	<?php echo CHtml::encode($model->Korrektor); ?>
	</td></tr><tr class="odd"><td>

	<b><?php echo CHtml::encode($model->getAttributeLabel('Beschreibung')); ?>:</b> <br>
	<?php echo CHtml::encode($model->Beschreibung); ?>
  </td><td>

	<b><?php echo CHtml::encode($model->getAttributeLabel('Aktion')); ?>:</b> <br>
	<?php echo CHtml::encode($model->Aktion); ?>
  </td><td>
  
	<b><?php echo CHtml::encode($model->getAttributeLabel('Loesung')); ?>:</b><br>
	<?php echo CHtml::encode($model->Loesung); ?>
  </td></tr><tr class="even"><td>

	<b><?php echo CHtml::encode($model->getAttributeLabel('Wartung')); ?>:</b>
	<?php echo CHtml::encode($model->Wartung); ?>
  </td><td>

	<b><?php echo CHtml::encode($model->getAttributeLabel('Intern')); ?>:</b>
	<?php echo CHtml::encode($model->Intern); ?>
	</td><td>
  
	<b><?php echo CHtml::encode($model->getAttributeLabel('SLA_betroffen')); ?>:</b>
	<?php echo CHtml::encode($model->SLA_betroffen); ?>
  </td></tr></table>

</div>