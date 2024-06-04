<?php 
$static = array(
    'Alle'     => Yii::t('fim','Alle'), 
);
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'rz-key-user-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'System'); ?>
		<?php echo $form->dropDownList($model,'System',CHtml::encodeArray($static + CHtml::listData(RzSysteme::model()->findAll(), 'System', 'System')), array('title'=>'Von der Störung betroffenes System', 'rel'=>'tooltip')); ?>
		<?php echo $form->error($model,'System'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Kunde'); ?>
		<?php echo $form->dropDownList($model, 'Kunde', CHtml::encodeArray($static + CHtml::listData(RzKunden::model()->findAll(), 'Kunde', 'Kunde')), array('title'=>'Von der Störung betroffener Kunden', 'rel'=>'tooltip')); ?>
		<?php echo $form->error($model,'Kunde'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Standort'); ?>
		<?php echo $form->dropDownList($model,'Standort',CHtml::encodeArray($static + CHtml::listData(RzStandorte::model()->findAll(), 'Standort', 'Standort')), array('title'=>'Von der Störung betroffener Standort', 'rel'=>'tooltip')); ?>
		<?php echo $form->error($model,'Standort'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'email'); ?>
		<?php echo $form->textField($model,'email',array('size'=>60,'maxlength'=>500)); ?>
		<?php echo $form->error($model,'email'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->