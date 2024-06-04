<?php

use yii\helpers\Arrayhelper;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\web\JsExpression;
//use yii\widgets\ActiveForm;

use kartik\widgets\ActiveForm;
use kartik\widgets\CheckBoxList;
use kartik\widgets\Select2;
use kartik\datecontrol\Module;
use kartik\datecontrol\DateControl;
use kartik\widgets\DateTimePicker;

/* @var $this yii\web\View */
/* @var $model app\models\RzReport */
/* @var $form yii\widgets\ActiveForm */
$checkboxLabelStyle = 'font-size:10px;width:200px;';

?>

<div class="rz-report-form" style="background-color:#d9edf7;">

    <?php $form = ActiveForm::begin(['id' => 'form-'.strval($model->Rid),
            'action' => $model->isNewRecord ? Url::to(['rz-report/create']) : Url::to(['rz-report/update/?id='.strval($model->Rid)])]); ?>
	<p class="note">Felder mit <span class="required">*</span> sind obligatorisch.</p>
  <table style="width:940px;">
  <tr class="odd"> 
  <td title="Von der Störung betroffenes System" class="well" style="margin-top:0px;padding-top:0px;vertical-align:top;width:230px!important;">
   <?php 
   //Yii::Warning(explode(',', $model->Kunde),'application');
      echo $form->field($model, 'System')->widget(Select2::classname(), [
        'name' => 'sel-System-'.strval($model->Rid),
        'data' => $rzSysteme,
        'options' => ['placeholder' => 'System wählen ...', 
                      'id' => 'sel-System-'.strval($model->Rid),
                      'value' => explode(',', $model->System),
                      'multiple' => true
        ],
        'pluginOptions' => [
            'allowClear' => true,
        ],
      ]);
    ?>
    <?php echo Html::a('Neues System bzw. Dienst', Url::to('/ITS/rz-systeme/create'), ['target' => '_blank', 'title'=>'Neuen Eintrag in "Systemen" erstellen', 'rel'=>'tooltip','style' => 'font-size:10px;', 'class' => 'btn btn-primary btn-xs' ]);        ?>
  
  </td>
  <td title="Von der Störung betroffene Kunden" class="well" style="margin-top:0px;padding-top:0px;vertical-align:top;width:230px!important;">
  <?php 
   //Yii::Warning(explode(',', $model->Kunde),'application');
      echo $form->field($model, 'Kunde')->widget(Select2::classname(), [
        'name' => 'sel-kunde-'.strval($model->Rid),
        'data' => $rzKunden,
        'options' => ['placeholder' => 'Kunde wählen ...', 
                      'id' => 'sel-kunde-'.strval($model->Rid),
                      'value' => explode(',', $model->Kunde),
                      'multiple' => true
        ],
        'pluginOptions' => [
            'allowClear' => true,
    //        'tags' => true,
    //        'tokenSeparators' => [',', ', '],
        ],
      ]);
    ?>
  </td>
  <td title="Von der Störung weiter betroffene Systeme" class="well" style="margin-top:0px;padding-top:0px;vertical-align:top;width:230px!important;">
   <?php 
   //Yii::Warning(explode(',', $model->Kunde),'application');
      echo $form->field($model, 'Betroffen')->widget(Select2::classname(), [
        'name' => 'sel-Betroffen-'.strval($model->Rid),
        'data' => $rzSysteme,
        'options' => ['placeholder' => 'Dienst wählen ...', 
                      'id' => 'sel-Betroffen-'.strval($model->Rid),
                      'value' => explode(',', $model->Betroffen),
                      'multiple' => true
        ],
        'pluginOptions' => [
            'allowClear' => true,
        ],
      ]);
    ?>
 </td>
 <td title="An welchem Standort tritt die St&ouml;rung auf" class="well" style="margin-top:0px;padding-top:0px;vertical-align:top;width:230px!important;">
   <?php 
   //Yii::Warning(explode(',', $model->Kunde),'application');
      echo $form->field($model, 'Standort')->widget(Select2::classname(), [
        'name' => 'sel-Standort-'.strval($model->Rid),
        'data' => $rzStandorte,
        'options' => ['placeholder' => 'Standort wählen ...', 
                      'id' => 'sel-Standort-'.strval($model->Rid),
                      'value' => explode(',', $model->Standort),
                      'multiple' => true
        ],
        'pluginOptions' => [
            'allowClear' => true,
        ],
      ]);
    ?>
    <?php echo Html::a('Neuer Standort', Url::to('/ITS/rz-standorte/create'), ['target' => '_blank', 'title'=>'Neuen Eintrag in "Standorte" erstellen', 'rel'=>'tooltip','style' => 'font-size:11px;', 'class' => 'btn btn-primary btn-xs' ]);        ?>
  </td> 
  </tr>
  <tr class="even">
  <td>
    <?php 
    echo $form->field($model, 'von')->widget(DateControl::classname(),[
      'type'=>DateControl::FORMAT_DATETIME,
    	'name' => 'von_time',
      'id' => 'von_time',
      'displayFormat' => 'php:d.m.Y H:i',
      'saveFormat' => 'php:Y-m-d H:i:s.u',
      'ajaxConversion'=>true,
      'asyncRequest' => true,
      'widgetOptions' => [
//          'layout' => '{remove}{input}',
        	'pluginOptions' => [
          		'autoclose' => true,
              'todayHighlight' => true,
              'todayBtn' => true,
          ],
          'pluginEvents' => [
//              'changecomplete.datecontrol' => "function(){alert( $('#date-form').event_time.day-dateform-day-disp);}",
/*              'changesuccess.datecontrol' => "function(){ziel = '/bpz/?ma='  + document.getElementById ('dateform-ma').value + '&day=' + document.getElementById ('dateform-day-disp').value;
                    var linkElement = document.getElementById('date_button');
                    linkElement.setAttribute('href', ziel);
                    linkElement.setAttribute('label', document.getElementById ('dateform-day-disp').value);}",
*///              'changesuccess.datecontrol' => "function(){ $('#date-form').submit();}",
          ],
          'defaultOptions' => [
              'style' => 'height: 25px;width:10em;',
          ],
    	],
    ])->label('Beginn der St&ouml;rung:'); 
    ?>
  </td><td>
    <?php 
    echo $form->field($model, 'bis')->widget(DateControl::classname(),[
      'type'=>DateControl::FORMAT_DATETIME,
    	'name' => 'bis_time',
      'id' => 'bis_time',
//      'value' => date('php:d.m.Y H:i:s.u', strtotime($model->bis)),
      'displayFormat' => 'php:d.m.Y H:i',
      'saveFormat' => 'php:Y-m-d H:i:s.u',
      'ajaxConversion'=>true,
      'asyncRequest' => true,
      'widgetOptions' => [
        	'pluginOptions' => [
          		'autoclose' => true,
              'todayHighlight' => true,
              'todayBtn' => true,
          ],
          'defaultOptions' => [
              'style' => 'height: 25px;width:10em;',
          ],
    	],
    ])->label('Ende der St&ouml;rung'); 
    ?>
  </td><td>
    <?php 
    echo $form->field($model, 'von_ausw')->widget(DateControl::classname(),[
      'type'=>DateControl::FORMAT_DATETIME,
    	'name' => 'bis_time',
      'id' => 'bis_time',
      'displayFormat' => 'php:d.m.Y H:i',
      'saveFormat' => 'php:Y-m-d H:i:s.u',
      'ajaxConversion'=>false,
      'asyncRequest' => true,
      'widgetOptions' => [
        	'pluginOptions' => [
          		'autoclose' => true,
              'todayHighlight' => true,
              'todayBtn' => true,
          ],
          'defaultOptions' => [
              'style' => 'height: 25px;width:10em;',
          ],
    	],
    ])->label('Beginn Auswirkung:'); 
    ?>
  </td><td title="">
    <?php 
    echo $form->field($model, 'bis_ausw')->widget(DateControl::classname(),[
      'type'=>DateControl::FORMAT_DATETIME,
    	'name' => 'bis_time',
      'id' => 'bis_time',
      'displayFormat' => 'php:d.m.Y H:i',
      'saveFormat' => 'php:Y-m-d H:i:s.u',
      'ajaxConversion'=>false,
      'asyncRequest' => true,
      'widgetOptions' => [
        	'pluginOptions' => [
              'size' => 'xs',
          		'autoclose' => true,
              'todayHighlight' => true,
              'todayBtn' => true,
          ],
          'defaultOptions' => [
          'buttonOptions' => ['class'=>'btn btn-primary btn-xs', 'style' => 'height: 25px;width:30em;'],
              'style' => 'height: 25px;width:10em;',
          ],
    	],
    ])->label('Ende Auswirkung'); 
    ?>
  </td></tr>  
<tr class="odd"><td title="Beschreibung der Störung" class="well" style="padding-top:5px;vertical-align:top;">
		<?php echo $form->field($model,'Beschreibung')->textArea(['rows'=>6, 'cols'=>40] ); ?>
  </td><td title="Beschreibung der durchgeführten Aktionen" class="well" style="padding-top:5px;vertical-align:top;">
		<?php echo $form->field($model,'Aktion')->textArea(['rows'=>6, 'cols'=>40] ); ?>
  </td><td title="Beschreibung der Lösung" class="well" style="padding-top:5px;vertical-align:top;">
		<?php echo $form->field($model,'Loesung')->textArea(['rows'=>6, 'cols'=>40] ); ?>
  </td><td class="well" style="padding-top:5px;vertical-align:top;">
		<?php echo $form->field($model,'Wiedervorlage')->checkBox(); ?>
  </td></tr>  
<tr class="even"><td>
	<div class="row">
    <ul>
		<?php echo $form->field($model,'Wartung')->checkBox(['title'=>'Die Störung entsteht durch eine Systemwartung ', 'rel'=>'tooltip']); ?>
    </ul><ul>
    </ul>
	</div>
  </td><td>
	<div class="row">
    <ul>
		<?php echo $form->field($model,'Intern')->checkBox(['title'=>'Eintrag ist nur für den IT-Service relevant', 'rel'=>'tooltip']); ?>
    </ul><ul>
    </ul>
	</div>
  </td><td>
	<div class="row">
    <ul>
		<?php echo $form->field($model,'SLA_betroffen')->checkBox(['title'=>'Die Störung betrifft die SLA', 'rel'=>'tooltip']); ?>
    </ul><ul>
    </ul>
	</div>
  </td><td title="Die Störung betrifft externe Kunden der VSA Gruppe">
  <div class="row">
		<?php echo $form->field($model,'Externe_betroffen')->checkBox(); ?>
  </div>  
 </td></tr><tr class="odd"><td title="Der Eintrag im RzReport wurde im Jour-Fix besprochen und freigegeben" class="well" style="padding-top:0px;vertical-align:top;">
 	<div class="row">
		<?php echo $form->field($model,'Freigegeben')->checkBox(); ?>
	  </td><td class="well" style="padding-top:5px;vertical-align:top;">
  </div>  
	<div class="row">
		<?php echo $form->field($model,'Author')->textInput(array('size'=>25,'maxlength'=>500,'readonly'=>'true','title'=>'Eintrag wurde erstellt durch', 'rel'=>'tooltip')); ?>
	</div>
  </td><td class="well" style="padding-top:5px;vertical-align:top;">
	<div class="row">
		<?php echo $form->field($model,'Korrektor')->textInput(array('size'=>25,'maxlength'=>500,'readonly'=>'true','title'=>'Eintrag wurde korrigiert durch', 'rel'=>'tooltip')); ?>
	</div>
  </td><td title="Abspeichern" class="well" style="padding-top:10px;vertical-align:top;">
  <div class="row buttons">
    <ul>
		<?php echo Html::submitButton($model->isNewRecord ? 'Erstellen' : 'Speichern', ['title'=>'Eintrag im RZ-Report abspeichern', 'rel'=>'tooltip', 'name'=>'ohne_email', 'class' => 'btn btn-success btn-xs']); ?>
    </ul>
    <ul>
		<?php echo Html::submitButton($model->isNewRecord ? 'Erstellen mit Email' : 'Speichern mit Email', ['title'=>'Eintrag im RZ-Report abspeichern', 'rel'=>'tooltip', 'name'=>'mit_email', 'class' => 'btn btn-success btn-xs']); ?>
    </ul>
	</div>
  </td>
  </tr>
  </table>

    <?php ActiveForm::end(); ?>

</div>
