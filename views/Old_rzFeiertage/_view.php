<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('FId')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->FId), array('view', 'id'=>$data->FId)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Datum')); ?>:</b>
	<?php echo CHtml::encode($data->Datum); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Desc')); ?>:</b>
	<?php echo CHtml::encode($data->Desc); ?>
	<br />


</div>