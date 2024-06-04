<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('Kid')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->Kid), array('view', 'id'=>$data->Kid)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('System')); ?>:</b>
	<?php echo CHtml::encode($data->System); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Kunde')); ?>:</b>
	<?php echo CHtml::encode($data->Kunde); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Standort')); ?>:</b>
	<?php echo CHtml::encode($data->Standort); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('email')); ?>:</b>
	<?php echo CHtml::encode($data->email); ?>
	<br />


</div>