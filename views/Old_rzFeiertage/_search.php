<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'FId'); ?>
		<?php echo $form->textField($model,'FId'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Datum'); ?>
		<?php echo $form->textField($model,'Datum'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Desc'); ?>
		<?php echo $form->textField($model,'Desc',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->