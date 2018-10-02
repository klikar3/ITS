<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'device-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'Device'); ?>
		<?php echo $form->textField($model,'Device',array('size'=>60,'maxlength'=>250)); ?>
		<?php echo $form->error($model,'Device'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'DeviceId'); ?>
		<?php echo $form->textField($model,'DeviceId'); ?>
		<?php echo $form->error($model,'DeviceId'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->