<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('zId')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->zId), array('view', 'id'=>$data->zId)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Mandant')); ?>:</b>
	<?php echo CHtml::encode($data->Mandant); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Wochentag')); ?>:</b>
	<?php echo CHtml::encode($data->Wochentag); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Kernzeit_von')); ?>:</b>
	<?php echo CHtml::encode($data->Kernzeit_von); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Kernzeit_bis')); ?>:</b>
	<?php echo CHtml::encode($data->Kernzeit_bis); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Tagesname')); ?>:</b>
	<?php echo CHtml::encode($data->Tagesname); ?>
	<br />


</div>