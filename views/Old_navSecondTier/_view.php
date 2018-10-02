<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('servername')); ?>:</b>
	<?php echo CHtml::encode($data->servername); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('service')); ?>:</b>
	<?php echo CHtml::encode($data->service); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('system')); ?>:</b>
	<?php echo CHtml::encode($data->system); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sqlserver')); ?>:</b>
	<?php echo CHtml::encode($data->sqlserver); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('datenbank')); ?>:</b>
	<?php echo CHtml::encode($data->datenbank); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('aktiv')); ?>:</b>
	<?php echo CHtml::encode($data->aktiv); ?>
	<br />


</div>