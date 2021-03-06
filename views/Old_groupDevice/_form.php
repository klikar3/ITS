<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'group-device-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
  	<?php echo $form->dropDownList($model,'Gruppe',CHtml::listData(Gruppe::model()->findAll(), 'Gruppe', 'Gruppe'),
                array('style'=>'width:150px;'),
				array('onchange'=>"$.fn.yiiGridView.update('holidays-grid', {data: $(this).serialize()});")
                ); ?>

		<?php //echo $form->labelEx($model,'Gruppe'); ?>
		<?php //echo $form->textField($model,'Gruppe',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'Gruppe'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'DeviceId'); ?>
		<?php echo $form->textField($model,'DeviceId'); ?>
		<?php echo $form->error($model,'DeviceId'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Anteil'); ?>
		<?php echo $form->textField($model,'Anteil',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'Anteil'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'DeviceName'); ?>
		<?php echo $form->textField($model,'DeviceName',array('size'=>50,'maxlength'=>250)); ?>
		<?php echo $form->error($model,'DeviceName'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->