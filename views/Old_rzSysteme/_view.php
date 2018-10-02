<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('SId')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->SId), array('view', 'id'=>$data->SId)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('System')); ?>:</b>
	<?php echo CHtml::encode($data->System); ?>
	<br />


</div>