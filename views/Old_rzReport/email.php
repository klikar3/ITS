<?php
$this->breadcrumbs=array(
	'Rz Reports'=>array('index'),
	'email',
);

$this->menu=array(
	array('label'=>'Einträge verwalten', 'url'=>array('admin')),
);
?>

<h2>Eskalationsmail an Keyuser versenden</h2>

<div class="wide form">

<?php $form=$this->beginWidget('application.extensions.bootstrap.widgets.TbActiveForm', array(
	'id'=>'rz-report-email',
	'enableAjaxValidation'=>false,
)); ?>
	<p class="note">Felder mit <span class="required">*</span> sind obligatorisch.</p>
  <div class="border">
	<?php echo $form->errorSummary($model); ?>

  <table class="form"><tr class="odd"> <td class="wide" title="Absender">
    <?php echo $form->labelEx($model,'absender'); ?>
		<?php echo $form->textField($model,'absender',array('class'=>'wide')); ?>
		<?php echo $form->error($model,'absender'); ?>
  </td></tr><tr class="even">
  <td title="Empfänger">
    <?php echo $form->labelEx($model,'empfang'); ?>
		<?php echo $form->textField($model,'empfang',array('class'=>'wide')); ?>
		<?php echo $form->error($model,'empfang'); ?>
  </td></tr><tr class="odd"><td title="Betreff">
		<?php //echo $form->labelEx($model,'Beschreibung'); ?>
		<?php echo $form->textAreaRow($model,'betreff',array('class'=>'wide','rows'=>2, 'cols'=>80) ); ?>
		<?php echo $form->error($model,'betreff'); ?>
  </td></tr><tr class="even">
  <td title="Nachrichtentext">
		<?php //echo $form->labelEx($model,'Aktion');
          Yii::import('ext.imperavi-redactor-widget.ImperaviRedactorWidget');
          $this->widget('ImperaviRedactorWidget', array(
              'model' => $model,
              'attribute' => 'text',
              // some options, see http://imperavi.com/redactor/docs/
              'options' => array( 'lang' => 'de'),
          ));
     ?>
		<?php //echo $form->textAreaRow($model,'text',array('class'=>'wide','rows'=>12, 'cols'=>180)); ?>
		<?php echo $form->error($model,'text'); ?>
  </td></tr><tr class="odd"><td title="Absenden">
		<?php echo CHtml::submitButton('Absenden', array('title'=>'Email absenden', 'rel'=>'tooltip')); ?>
  </td></tr></table>
  </div>
<?php $this->endWidget(); ?>

</div><!-- form -->          