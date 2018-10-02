<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'gdId'); ?>
		<?php echo $form->textField($model,'gdId'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Gruppe'); ?>
		<?php echo $form->textField($model,'Gruppe',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'DeviceId'); ?>
		<?php echo $form->textField($model,'DeviceId'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Anteil'); ?>
		<?php echo $form->textField($model,'Anteil',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'DeviceName'); ?>
		<?php echo $form->textField($model,'DeviceName',array('size'=>50,'maxlength'=>250)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->