<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'dId'); ?>
		<?php echo $form->textField($model,'dId'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Device'); ?>
		<?php echo $form->textField($model,'Device',array('size'=>60,'maxlength'=>250)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'DeviceId'); ?>
		<?php echo $form->textField($model,'DeviceId'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->