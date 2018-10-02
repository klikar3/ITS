<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('SId')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->SId), array('view', 'id'=>$data->SId)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Standort')); ?>:</b>
	<?php echo CHtml::encode($data->Standort); ?>
	<br />


</div>