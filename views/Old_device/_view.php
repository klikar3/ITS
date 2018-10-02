<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('dId')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->dId), array('view', 'id'=>$data->dId)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Device')); ?>:</b>
	<?php echo CHtml::encode($data->Device); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('DeviceId')); ?>:</b>
	<?php echo CHtml::encode($data->DeviceId); ?>
	<br />


</div>