<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('gdId')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->gdId), array('view', 'id'=>$data->gdId)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Gruppe')); ?>:</b>
	<?php echo CHtml::encode($data->Gruppe); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('DeviceId')); ?>:</b>
	<?php echo CHtml::encode($data->DeviceId); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Anteil')); ?>:</b>
	<?php echo CHtml::encode($data->Anteil); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('DeviceName')); ?>:</b>
	<?php echo CHtml::encode($data->DeviceName); ?>
	<br />


</div>