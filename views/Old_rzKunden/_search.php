<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'KId'); ?>
		<?php echo $form->textField($model,'KId'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Kunde'); ?>
		<?php echo $form->textField($model,'Kunde',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->