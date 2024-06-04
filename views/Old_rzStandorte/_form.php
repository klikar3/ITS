<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'rz-standorte-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'Standort'); ?>
		<?php echo $form->textField($model,'Standort',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'Standort'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->