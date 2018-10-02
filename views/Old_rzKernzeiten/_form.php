<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'rz-kernzeiten-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'Mandant'); ?>
		<?php echo $form->textField($model,'Mandant',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'Mandant'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Wochentag'); ?>
		<?php echo $form->textField($model,'Wochentag'); ?>
		<?php echo $form->error($model,'Wochentag'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Kernzeit_von'); ?>
		<?php echo $form->textField($model,'Kernzeit_von'); ?>
		<?php echo $form->error($model,'Kernzeit_von'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Kernzeit_bis'); ?>
		<?php echo $form->textField($model,'Kernzeit_bis'); ?>
		<?php echo $form->error($model,'Kernzeit_bis'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Tagesname'); ?>
		<?php echo $form->textField($model,'Tagesname',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'Tagesname'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->