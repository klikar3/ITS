<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'nav-second-tier-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'servername'); ?>
		<?php echo $form->textField($model,'servername',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'servername'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'service'); ?>
		<?php echo $form->textField($model,'service',array('size'=>60,'maxlength'=>150)); ?>
		<?php echo $form->error($model,'service'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'system'); ?>
		<?php echo $form->textField($model,'system',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'system'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'sqlserver'); ?>
		<?php echo $form->textField($model,'sqlserver',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'sqlserver'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'datenbank'); ?>
		<?php echo $form->textField($model,'datenbank',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'datenbank'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'aktiv'); ?>
		<?php echo $form->textField($model,'aktiv'); ?>
		<?php echo $form->error($model,'aktiv'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->