<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'rz-feiertage-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'Datum'); ?>
    <?php //Yii::import('application.extensions.CJuiDatePicker.CJuiDatePicker');
            $this->widget('zii.widgets.jui.CJuiDatePicker', array(
                'model'=>$model,  //Model object
                'attribute'=>'Datum', //attribute name
                'value' => $model->Datum,
                'language'=>'de', 
                // additional javascript options for the date picker plugin
                'options'=>array(
                    'showAnim'=>'fold',
                    'dateFormat'=>'dd.mm.yy',
                    'language'=>'de',
                ),
                'htmlOptions'=>array(
                    'style'=>'height:20px; width: 120px;',
                    'title'=>'Datum', 
                    'rel'=>'tooltip',
                    'value'=> date_create($model->Datum)->format('d.m.Y'),
                ),
            )); 
        ?>
		<?php echo $form->error($model,'Datum'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Desc'); ?>
		<?php echo $form->textField($model,'Desc',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'Desc'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->