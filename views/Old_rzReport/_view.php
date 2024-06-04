<div class="view">
   <table class="detail-view"><tr class="odd"
	<b><?php echo CHtml::encode($data->getAttributeLabel('Rid')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->Rid), array('view', 'id'=>$data->Rid)); ?>
  </td></tr><tr class="even"><td>

	<b><?php echo CHtml::encode($data->getAttributeLabel('System')); ?>:</b>
	<?php echo CHtml::encode($data->System); ?>
  </td><td>

	<b><?php echo CHtml::encode($data->getAttributeLabel('von')); ?>:</b>
	<?php echo CHtml::encode(Yii::app()->dateFormatter->format('dd.MM.yyyy HH:mm',$data->von)); ?>
  </td><td>

	<b><?php echo CHtml::encode($data->getAttributeLabel('bis')); ?>:</b>
	<?php echo CHtml::encode(Yii::app()->dateFormatter->format('dd.MM.yyyy HH:mm',$data->bis)); ?>
	</td></tr><tr class="odd"><td>

	<b><?php echo CHtml::encode($data->getAttributeLabel('Kunde')); ?>:</b>
	<?php echo CHtml::encode($data->Kunde); ?>
	</td><td>

	<b><?php echo CHtml::encode($data->getAttributeLabel('Prio')); ?>:</b>
	<?php echo CHtml::encode($data->Prio); ?>
  </td><td>

	<b><?php echo CHtml::encode($data->getAttributeLabel('Schwere')); ?>:</b>
	<?php echo CHtml::encode($data->Schwere); ?>
	</td></tr><tr class="even"><td>

	<b><?php echo CHtml::encode($data->getAttributeLabel('Beschreibung')); ?>:</b>
	<?php echo CHtml::encode($data->Beschreibung); ?>
  </td><td>

	<b><?php echo CHtml::encode($data->getAttributeLabel('Aktion')); ?>:</b>
	<?php echo CHtml::encode($data->Aktion); ?>
  </td><td>
  
	<b><?php echo CHtml::encode($data->getAttributeLabel('Loesung')); ?>:</b>
	<?php echo CHtml::encode($data->Loesung); ?>
  </td></tr><tr class="odd"><td>

	<b><?php echo CHtml::encode($data->getAttributeLabel('Wartung')); ?>:</b>
	<?php echo CHtml::encode($data->Wartung); ?>
  </td><td>

	<b><?php echo CHtml::encode($data->getAttributeLabel('Intern')); ?>:</b>
	<?php echo CHtml::encode($data->Intern); ?>
	</td><td>
  
  </td></tr></table>

</div>