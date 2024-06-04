<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'SId'); ?>
		<?php echo $form->textField($model,'SId'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Standort'); ?>
		<?php echo $form->textField($model,'Standort',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->