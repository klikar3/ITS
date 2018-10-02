<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('KId')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->KId), array('view', 'id'=>$data->KId)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Kunde')); ?>:</b>
	<?php echo CHtml::encode($data->Kunde); ?>
	<br />


</div>