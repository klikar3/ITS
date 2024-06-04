<div class="wide form">

<?php $form=$this->beginWidget('application.extensions.bootstrap.widgets.TbActiveForm', array(
	'id'=>'rz-report-form',
	'enableAjaxValidation'=>true,
)); ?>
	<p class="note">Felder mit <span class="required">*</span> sind obligatorisch.</p>
  <div class="border">
	<?php echo $form->errorSummary($model); ?>

  <table class="form"><tr class="odd"> <td title="Von der Störung betroffenes System">

	<div class="row">
		<?php echo $form->labelEx($model,'System', array( 'title'=>'Neuen Eintrag in "Systemen" erstellen', 'rel'=>'tooltip' )); ?> <table class="smal">
		<?php //echo $form->textField($model,'System',array('size'=>30,'maxlength'=>50)); 
    echo $form->CheckBoxList($model, 'System', CHtml::encodeArray(CHtml::listData(RzSysteme::model()->findAll(array('order'=>'System ASC')), 'System', 'System')), array('template'=>'<tr><td class="left">{label}</td><td class="right">{input}</td></tr>
    ','checkAll' => 'Check All')); ?></table> 
		<?php echo $form->error($model,'System', $htmlOptions=array( ), $enableAjaxValidation=false); ?>
    <?php echo CHtml::link('Neues System bzw. Dienst', 'index.php?r=rzSysteme/create', array('target' => '_blank', 'title'=>'Neuen Eintrag in "Systemen" erstellen', 'rel'=>'tooltip' ));        ?>

	</div>
  </td><td title="Von der Störung betroffene Kunden">
	<div class="row"> 
		<?php echo $form->labelEx($model,'Kunde'); ?>  <table class="smal">
		<?php //echo $form->textField($model,'Kunde',array('size'=>30,'maxlength'=>500)); 
          if(isset($model->Kunde)) { 
                // snipe list and build the option array
                $m = explode(",", $model->Kunde); 
                $model->Kunde = $m;}
    echo $form->CheckBoxList($model, 'Kunde', CHtml::encodeArray(CHtml::listData(RzKunden::model()->findAll(array('order'=>'Kunde ASC')), 'Kunde', 'Kunde')), array('checkAll'=>'Check All', 'template'=>'<tr><td class="left">{label}</td><td class="right">{input}</td></tr>')); ?></table>
    <?php /*      if(isset($model->Kunde)) { 
                // snipe product list and build the option array
                $m = explode(",", $model->Kunde);
                $x = 0;
                foreach ($m as $p)
                  { $pp[$p] = array('selected'=>'selected');
                    $x++;
                  }
                echo $form->ListBox($model, 'Kunde', CHtml::encodeArray(CHtml::listData(RzKunden::model()->findAll(), 'Kunde', 'Kunde')), array('multiple' => 'multiple', 'title'=>'Von der Störung betroffene Kunden', 'rel'=>'tooltip', 'options'=>$pp));    
          } else {
          echo $form->ListBox($model, 'Kunde', CHtml::encodeArray(CHtml::listData(RzKunden::model()->findAll(), 'Kunde', 'Kunde')), array('multiple' => 'multiple', 'title'=>'Von der Störung betroffene Kunden', 'rel'=>'tooltip'));        
          } */?>
		<?php echo $form->error($model,'Kunde', $htmlOptions=array(), $enableAjaxValidation=true); ?>
    <?php echo CHtml::link('Neuer Kunde', 'index.php?r=rzKunden/create', array('target' => '_blank', 'title'=>'Neuen Eintrag in "Kunden" erstellen', 'rel'=>'tooltip', 'style'=>'vertical-align: bottom;'  ))        ?>
	</div>
  </td><td title="Von der Störung weiter betroffene Systeme">
	<div class="row">
		<?php echo $form->labelEx($model,'Betroffen', array('style'=>'float: none; display: inline;')); ?>   <table class="smal">
    <?php   if(isset($model->Betroffen)) { 
                // snipe list and build the option array
                $m = explode(",", $model->Betroffen); 
                $model->Betroffen = $m;}
   echo $form->CheckBoxList($model, 'Betroffen', CHtml::encodeArray(CHtml::listData(RzSysteme::model()->findAll(array('order'=>'System ASC')), 'System', 'System')), array('checkAll' => 'checkAll', 'template'=>'<tr><td class="left">{label}</td><td class="right">{input}</td></tr>', 'container'=>'',)); ?></table>
		<?php //echo $form->textField($model,'Kunde',array('size'=>30,'maxlength'=>500)); 
        /*  if(isset($model->Betroffen)) { 
                // snipe product list and build the option array
                $m = explode(",", $model->Betroffen);
                $x = 0;
                foreach ($m as $p)
                  { $pp[$p] = array('selected'=>'selected');
                    $x++;
                  }
                echo $form->ListBox($model, 'Betroffen', CHtml::encodeArray(CHtml::listData(RzSysteme::model()->findAll(), 'System', 'System')), array('multiple' => 'multiple', 'title'=>'Von der Störung betroffene Systeme', 'rel'=>'tooltip', 'options'=>$pp));    
          } else {
          echo $form->ListBox($model, 'Betroffen', CHtml::encodeArray(CHtml::listData(RzSysteme::model()->findAll(), 'System', 'System')), array('multiple' => 'multiple', 'title'=>'Von der Störung betroffene Systeme', 'rel'=>'tooltip'));        
          }*/ ?>
		<?php echo $form->error($model,'Betroffen', $htmlOptions=array(), $enableAjaxValidation=false); ?>

		<?php //echo $form->labelEx($model,'Prio'); ?>
		<?php //echo $form->dropDownList($model,'Prio',array('1'=>'- 1 -','2'=>'- 2 -','3'=>'- 3 -'),array('title'=>'Priorität', 'rel'=>'tooltip'));?>
		<?php //echo $form->error($model,'Prio'); ?>
  </div>
  </td><td title="An welchem Standort tritt die St&ouml;rung auf">
  <div class="row">
		<?php echo $form->labelEx($model,'Standort', array('style'=>'float: left; display: inline;')); ?> <table class="smal">
    <?php if(isset($model->Standort)) { 
                // snipe list and build the option array
                $m = explode(",", $model->Standort); 
                $model->Standort = $m;}
          echo $form->CheckBoxList($model, 'Standort', CHtml::encodeArray(CHtml::listData(RzStandorte::model()->findAll(array('order'=>'Standort ASC')), 'Standort', 'Standort')), array('checkAll' => 'checkAll', 'template'=>'<tr><td class="left">{label}</td><td class="right">{input}</td></tr>')); ?></table>	
		<?php echo $form->error($model,'Standort', $htmlOptions=array(), $enableAjaxValidation=false); ?>
    <?php echo CHtml::link('Neuer Standort', 'index.php?r=rzStandorte/create', array('target' => '_blank', 'title'=>'Neuen Eintrag in "Standorte" erstellen', 'rel'=>'tooltip'  ))        ?>
  </div>  
  </td></tr><tr class="even"><td>
	<div class="row">
  <?php echo $form->labelEx($model,'von'); ?>
    <?php Yii::import('application.extensions.CJuiDateTimePicker.CJuiDateTimePicker');
        $this->widget('CJuiDateTimePicker', array(
            'model'=>$model,  //Model object
            'attribute'=>'von', //attribute name
            'value' => $model->von,
            'mode'=>'datetime', //use "time","date" or "datetime" (default)
            'language'=>'de', 
            // additional javascript options for the date picker plugin
            'options'=>array(
                'showAnim'=>'fold',
                'dateFormat'=>'dd.mm.yy',
                'timeFormat' => 'HH:mm',
                'hourGrid' => '4',
                'minuteGrid' => '10',
                'language'=>'de',
                'alwaysSetTime' => true,
//                'value' => date_create($model->von)->format('dd.mm.yy'),
                //'defaultDate'=>$model->von,
                //'parse' => 'loose',
//                'hour' => date_create($model->von)->format('H'),
//                'minute' => date_create($model->von)->format('i'),
//                'controlType' => 'slider',
            ),
            'htmlOptions'=>array(
                'style'=>'height:20px; width: 120px;',
                'title'=>'Startzeitpunkt', 
                'rel'=>'tooltip',
                'value'=> date_create($model->von)->format('d.m.Y H:i'),
            ),
        )); 
    ?>
		<?php //echo $form->textField($model,'von'); ?>
		<?php echo $form->error($model,'von'); ?>
	</div>
  </td><td>
	<div class="row">
		<?php echo $form->labelEx($model,'bis'); ?>
    <?php Yii::import('application.extensions.CJuiDateTimePicker.CJuiDateTimePicker');
        $this->widget('CJuiDateTimePicker', array(
            'model'=>$model,  //Model object
            'attribute'=>'bis', //attribute name
            'value' => $model->bis,
            'mode'=>'datetime', //use "time","date" or "datetime" (default)
            'language'=>'de',
            // additional javascript options for the date picker plugin
            'options'=>array(
                'showAnim'=>'fold',
                'dateFormat'=>'dd.mm.yy',
                'language'=>'de',
                //'parse' => 'loose',
                'timeFormat' => 'HH:mm',
                'hourGrid' => '4',
                'minuteGrid' => '10',
           ),
            'htmlOptions'=>array(
                'style'=>'height:20px; width: 120px;',
                'title'=>'Endzeitpunkt', 
                'rel'=>'tooltip',
                'value'=> date_create($model->bis)->format('d.m.Y H:i'),
          ),
        ));
    ?>
		<?php echo $form->error($model,'bis'); ?>
	</div>
  </td><td>
	<div class="row">
  <?php echo $form->labelEx($model,'von_ausw'); ?>
    <?php Yii::import('application.extensions.CJuiDateTimePicker.CJuiDateTimePicker');
        $this->widget('CJuiDateTimePicker', array(
            'model'=>$model,  //Model object
            'attribute'=>'von_ausw', //attribute name
            'value' => $model->von_ausw,
            'mode'=>'datetime', //use "time","date" or "datetime" (default)
            'language'=>'de', 
            // additional javascript options for the date picker plugin
            'options'=>array(
                'showAnim'=>'fold',
                'dateFormat'=>'dd.mm.yy',
                'timeFormat' => 'HH:mm',
                'hourGrid' => '4',
                'minuteGrid' => '10',
                'language'=>'de',
                'alwaysSetTime' => true,
            ),
            'htmlOptions'=>array(
                'style'=>'height:20px; width: 120px;',
                'title'=>'Startzeitpunkt', 
                'rel'=>'tooltip',
                'value'=> date_create($model->von_ausw)->format('d.m.Y H:i'),
            ),
        )); 
    ?>
		<?php echo $form->error($model,'von_ausw'); ?>
	</div>
  </td><td title="">
  <div class="row">
  <?php echo $form->labelEx($model,'bis_ausw'); ?>
    <?php Yii::import('application.extensions.CJuiDateTimePicker.CJuiDateTimePicker');
        $this->widget('CJuiDateTimePicker', array(
            'model'=>$model,  //Model object
            'attribute'=>'bis_ausw', //attribute name
            'value' => $model->bis_ausw,
            'mode'=>'datetime', //use "time","date" or "datetime" (default)
            'language'=>'de', 
            // additional javascript options for the date picker plugin
            'options'=>array(
                'showAnim'=>'fold',
                'dateFormat'=>'dd.mm.yy',
                'timeFormat' => 'HH:mm',
                'hourGrid' => '4',
                'minuteGrid' => '10',
                'language'=>'de',
                'alwaysSetTime' => true,
            ),
            'htmlOptions'=>array(
                'style'=>'height:20px; width: 120px;',
                'title'=>'Startzeitpunkt', 
                'rel'=>'tooltip',
                'value'=> date_create($model->bis_ausw)->format('d.m.Y H:i'),
            ),
        )); 
    ?>
		<?php echo $form->error($model,'bis_ausw'); ?>
  </div>  
  </td></tr><tr class="odd"><td title="Beschreibung der Störung">
	<div class="row">
		<?php //echo $form->labelEx($model,'Beschreibung'); ?>
		<?php echo $form->textAreaRow($model,'Beschreibung',array('rows'=>6, 'cols'=>40) ); ?>
		<?php echo $form->error($model,'Beschreibung'); ?>
	</div>
  </td><td title="Beschreibung der durchgeführten Aktionen">
	<div class="row">
		<?php //echo $form->labelEx($model,'Aktion'); ?>
		<?php echo $form->textAreaRow($model,'Aktion',array('rows'=>6, 'cols'=>40)); ?>
		<?php echo $form->error($model,'Aktion'); ?>
	</div>
  </td><td title="Beschreibung der Lösung">
	<div class="row">
		<?php //echo $form->labelEx($model,'Loesung'); ?>
		<?php echo $form->textAreaRow($model,'Loesung',array('rows'=>6, 'cols'=>40)); ?>
		<?php echo $form->error($model,'Loesung'); ?>
	</div>
  </td><td>
	<div class="row">
 		<?php echo $form->labelEx($model,'Wiedervorlage', array('style'=>'color: blue;')); ?>
		<?php echo $form->Checkbox($model,'Wiedervorlage'); ?>
		<?php echo $form->error($model,'Wiedervorlage'); ?>
	</div>
  </td></tr><tr class="even"><td>
	<div class="row">
    <ul>
    <table class="smal"><tr><td>
		<?php echo $form->labelEx($model,'Wartung', array('style'=>'width: 120px; font-weight: bold;')); ?>  </td><td>
		<?php echo $form->Checkbox($model,'Wartung', array('title'=>'Die Störung entsteht durch eine Systemwartung ', 'rel'=>'tooltip')); ?>
    </td></tr></table>
		<?php echo $form->error($model,'Wartung'); ?>
    </ul><ul>
    </ul>
	</div>
  </td><td>
	<div class="row">
    <ul>
		<?php echo $form->labelEx($model,'Intern', array('style'=>'width: 120px;')); ?>
		<?php echo $form->Checkbox($model,'Intern', array('title'=>'Eintrag ist nur für den IT-Service relevant', 'rel'=>'tooltip')); ?>
		<?php echo $form->error($model,'Intern'); ?>
    </ul><ul>
    </ul>
	</div>
  </td><td>
	<div class="row">
    <ul>
		<?php echo $form->labelEx($model,'SLA_betroffen', array('style'=>'width: 120px;')); ?>
		<?php echo $form->Checkbox($model,'SLA_betroffen', array('title'=>'Die Störung betrifft die SLA', 'rel'=>'tooltip')); ?>
		<?php echo $form->error($model,'SLA_betroffen'); ?>
    </ul><ul>
		<?php //echo $form->labelEx($model,'Externe_betroffen'); ?>
		<?php //echo $form->Checkbox($model,'Externe_betroffen'); ?>
		<?php //echo $form->error($model,'Externe_betroffen'); ?>
    </ul>
	</div>
  </td><td title="Die Störung betrifft externe Kunden der VSA Gruppe">
  <div class="row">
		<?php echo $form->labelEx($model,'Externe_betroffen', array('style'=>'width: 120px;')); ?>
		<?php echo $form->Checkbox($model,'Externe_betroffen'); ?>
		<?php echo $form->error($model,'Externe_betroffen'); ?>
  </div>  
 </td></tr><tr class="odd"><td title="Der Eintrag im RzReport wurde im Jour-Fix besprochen und freigegeben">
 	<div class="row">
 		<?php echo $form->labelEx($model,'Freigegeben', array('style'=>'width: 120px; color: red;')); ?>
		<?php echo $form->Checkbox($model,'Freigegeben'); ?>
		<?php echo $form->error($model,'Freigegeben'); ?>
	  </td><td>
  </div>  
	<div class="row">
		<?php echo $form->labelEx($model,'Author', array('style'=>'float: none; display: inline;')); ?>
		<?php echo $form->textField($model,'Author',array('size'=>25,'maxlength'=>500,'readonly'=>'true','title'=>'Eintrag wurde erstellt durch', 'rel'=>'tooltip')); ?>
		<?php echo $form->error($model,'Author'); ?>
	</div>
  </td><td>
	<div class="row">
		<?php echo $form->labelEx($model,'Korrektor', array('style'=>'float: none; display: inline;')); ?>
		<?php echo $form->textField($model,'Korrektor',array('size'=>25,'maxlength'=>500,'readonly'=>'true','title'=>'Eintrag wurde korrigiert durch', 'rel'=>'tooltip')); ?>
		<?php echo $form->error($model,'Korrektor'); ?>
	</div>
  </td><td title="Abspeichern">
  <div class="row buttons">
    <ul>
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Erstellen' : 'Speichern', array('title'=>'Eintrag im RZ-Report abspeichern', 'rel'=>'tooltip', 'name'=>'ohne_email')); ?>
    </ul>
    <ul>
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Erstellen mit Email' : 'Speichern mit Email', array('title'=>'Eintrag im RZ-Report abspeichern', 'rel'=>'tooltip', 'name'=>'mit_email')); ?>
    </ul>
	</div>
  </td></tr></table>
  </div>
<?php $this->endWidget(); ?>

</div><!-- form -->          