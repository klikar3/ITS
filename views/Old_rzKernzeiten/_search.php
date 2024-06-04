<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'zId'); ?>
		<?php echo $form->textField($model,'zId'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Mandant'); ?>
		<?php echo $form->textField($model,'Mandant',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Wochentag'); ?>
		<?php echo $form->textField($model,'Wochentag'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Kernzeit_von'); ?>
		<?php echo $form->textField($model,'Kernzeit_von'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Kernzeit_bis'); ?>
		<?php echo $form->textField($model,'Kernzeit_bis'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Tagesname'); ?>
		<?php echo $form->textField($model,'Tagesname',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->