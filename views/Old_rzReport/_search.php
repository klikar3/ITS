<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'Rid'); ?>
		<?php echo $form->textField($model,'Rid',array('size'=>19,'maxlength'=>19)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'System'); ?>
		<?php echo $form->textField($model,'System',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'von'); ?>
		<?php echo $form->textField($model,'von'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'bis'); ?>
		<?php echo $form->textField($model,'bis'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Kunde'); ?>
		<?php echo $form->textField($model,'Kunde',array('size'=>60,'maxlength'=>500)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Betroffen'); ?>
		<?php echo $form->textField($model,'Betroffen',array('size'=>60,'maxlength'=>500)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Standort'); ?>
		<?php echo $form->textField($model,'Standort',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Prio'); ?>
		<?php echo $form->textField($model,'Prio'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Schwere'); ?>
		<?php echo $form->textField($model,'Schwere'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Beschreibung'); ?>
		<?php echo $form->textField($model,'Beschreibung',array('size'=>-1,'maxlength'=>-1)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Aktion'); ?>
		<?php echo $form->textField($model,'Aktion',array('size'=>-1,'maxlength'=>-1)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Loesung'); ?>
		<?php echo $form->textField($model,'Loesung',array('size'=>-1,'maxlength'=>-1)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Wartung'); ?>
		<?php echo $form->textField($model,'Wartung'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Intern'); ?>
		<?php echo $form->textField($model,'Intern'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->