<?php

use yii\helpers\Arrayhelper;
use yii\helpers\Html;
use yii\helpers\Url;
//use yii\widgets\ActiveForm;

use kartik\widgets\ActiveForm;
use kartik\widgets\CheckBoxList;
use kartik\datecontrol\Module;
use kartik\datecontrol\DateControl;
use kartik\widgets\DateTimePicker;

/* @var $this yii\web\View */
/* @var $model app\models\RzReport */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="rz-report-form">

    <?php $form = ActiveForm::begin(); ?>
	<p class="note">Felder mit <span class="required">*</span> sind obligatorisch.</p>
  <table style="width:940px;"><tr> <td title="Von der Störung betroffenes System" class="well" style="margin-top:0px;padding-top:0px;vertical-align:top;width:300px!important;">
    <table> 
    <?php echo $form->field($model, 'System')->CheckBoxList( $rzSysteme,
          [  
          'item' => function ($index, $label, $name, $checked, $value) use ($model) {
/*                Yii::Warning(\yii\helpers\VarDumper::dumpAsString($index, 10, false),'application');   // 0
                Yii::Warning(\yii\helpers\VarDumper::dumpAsString($label, 10, false),'application');   // Navision-Dienst
*//*                 Yii::Warning(\yii\helpers\VarDumper::dumpAsString($name, 10, false),'application');    // RzReport[System][]
               Yii::Warning(\yii\helpers\VarDumper::dumpAsString($label, 10, false).\yii\helpers\VarDumper::dumpAsString($model->System, 10, false),'application'); // false
                Yii::Warning(\yii\helpers\VarDumper::dumpAsString($value, 10, false),'application');   // 1
*/                
/*                $check = (strpos($model->System,$value)>0) ? 'checked' : '';
              return "<tr><td><label class='checkbox col-md-4' style='font-weight: normal;'><input type='checkbox' {$check} name='{$name}' value='{$value}'></td><td>{$label}</label></td></tr>";
*/                $checked = (strpos($model->System,$value)===false) ? false : true;
                  return '<tr><td>'.Html::checkbox($name, $checked, [ 'checkboxTemplate'=>'<tr><td>{label}</td><td>{input}</td></tr>',
                      'value' => $value,
                      'label' => $label,//'<label for="' . $label . '">' . $label . '</label>',
                      'labelOptions' => [
                          'class' => 'ckbox ckbox-primary col-md-4',
                          'style' => 'font-size:11px;width:200px;'
                      ],
                      'id' => $label,
                  ]).'</td></tr>';
              },
          'itemOptions' => [
              'labelOptions' => ['class' => 'ckbox ckbox-primary col-md-4', 'style' => 'font-size:12px;width:300px;'],
              'containerOptions' => ['style' => 'margin-top:0px;padding-top:0px;'],
//                                                          'template'=>'<tr><td>{label}</td><td>{input}</td></tr>', 
            ],    
          ]); //->label('',['style' => 'margin:0px;padding:0px;']);
//(RzSysteme::model()->findAll(array('order'=>'System ASC')), 'System', 'System')), array('template'=>'<tr><td class="left">{label}</td><td class="right">{input}</td></tr>
//    ','checkAll' => 'Check All')); ?>
    </table>
		<?php //echo $form->error($model,'System', $htmlOptions=array( ), $enableAjaxValidation=false); ?>
    <?php echo Html::a('Neues System bzw. Dienst', '/rz-systeme/create', ['target' => '_blank', 'title'=>'Neuen Eintrag in "Systemen" erstellen', 'rel'=>'tooltip','style' => 'font-size:11px;', 'class' => 'btn btn-primary btn-xs' ]);        ?>
  
  </td><td title="Von der Störung betroffene Kunden" class="well" style="margin-top:0px;padding-top:0px;vertical-align:top;">
	<div class="row">  
    <table class="smal"> 
    <?php
    echo $form->field($model, 'Kunde')->CheckBoxList( $rzKunden,
          [ 'itemOptions' => [
              'labelOptions' => ['class' => 'ckbox ckbox-primary col-md-4', 'style' => 'font-size:12px;width:300px;'],
            ], 
          'item' => function ($index, $label, $name, $checked, $value)  use ($model) {
                $checked = (strpos($model->Kunde,$value)===false) ? false : true;
                return '<tr><td>'.Html::checkbox($name, $checked, [ 'checkboxTemplate'=>'<tr><td>{label}</td><td>{input}</td></tr>',
                      'value' => $value,
                      'label' => $label,//'<label for="' . $label . '">' . $label . '</label>',
                      'labelOptions' => [
                          'class' => 'ckbox ckbox-primary col-md-4',
                          'style' => 'font-size:11px;width:200px;'
                      ],
                      'id' => $label,
                  ]).'</td></tr>';
              },
          ]); //->label('');
    ?>
    </table>
	</div>
  </td><td title="Von der Störung weiter betroffene Systeme" class="well" style="margin-top:0px;padding-top:0px;vertical-align:top;">
	<div class="row">
		<table class="smal">
    <?php echo $form->field($model, 'Betroffen')->CheckBoxList( $rzSysteme,
          [ 'itemOptions' => [
              'labelOptions' => ['class' => 'ckbox ckbox-primary col-md-4', 'style' => 'font-size:12px;width:300px;'],
              'containerOptions' => ['style' => 'margin-top:0px;padding-top:0px;'],
            ], 
          'item' => function ($index, $label, $name, $checked, $value)  use ($model) {
                $checked = (strpos($model->Betroffen,$value)===false) ? false : true;
                  return '<tr><td>'.Html::checkbox($name, $checked, [ 'checkboxTemplate'=>'<tr><td>{label}</td><td>{input}</td></tr>',
                      'value' => $value,
                      'label' => $label,
                      'labelOptions' => [
                          'class' => 'ckbox ckbox-primary col-md-4',
                          'style' => 'font-size:11px;width:200px;'
                      ],
                      'id' => $label,
                  ]).'</td></tr>';
              },
          ]); //->label('',['style' => 'margin:0px;padding:0px;']);
    ?>
    </table>
  </div>
  </td><td title="An welchem Standort tritt die St&ouml;rung auf" class="well" style="margin-top:0px;padding-top:0px;vertical-align:top;">
  <div class="row">
		<table class="smal">
    <?php echo $form->field($model, 'Standort')->CheckBoxList( $rzStandorte,
          [ 'itemOptions' => [
              'labelOptions' => ['class' => 'ckbox ckbox-primary col-md-4', 'style' => 'font-size:12px;width:300px;'],
              'containerOptions' => ['style' => 'margin-top:0px;padding-top:0px;'],
            ], 
          'item' => function ($index, $label, $name, $checked, $value)  use ($model) {
                $checked = (strpos($model->Standort,$value)===false) ? false : true;
                  return '<tr><td>'.Html::checkbox($name, $checked, [ 'checkboxTemplate'=>'<tr><td>{label}</td><td>{input}</td></tr>',
                      'value' => $value,
                      'label' => $label,//'<label for="' . $label . '">' . $label . '</label>',
                      'labelOptions' => [
                          'class' => 'ckbox ckbox-primary col-md-4',
                          'style' => 'font-size:11px;width:200px;'
                      ],
                      'id' => $label,
                  ]).'</td></tr>';
              },
          ]); //->label('',['style' => 'margin:0px;padding:0px;']);
      ?>
    </table>	
    <?php echo Html::a('Neuer Standort', 'index.php?r=/rz-standorte/create', ['target' => '_blank', 'title'=>'Neuen Eintrag in "Standorte" erstellen', 'rel'=>'tooltip','style' => 'font-size:11px;', 'class' => 'btn btn-primary btn-xs' ]);        ?>
  </div>  
  </td> 
  </tr><tr class="even"><td>
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
      'displayFormat' => 'php:d.m.Y H:i',
      'saveFormat' => 'php:Y-m-d H:i:s.u',
      'ajaxConversion'=>false,
      'asyncRequest' => true,
      'widgetOptions' => [
        	'pluginOptions' => [
          		'autoclose' => true,
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
          		'autoclose' => true,
          ],
          'defaultOptions' => [
              'style' => 'height: 25px;width:10em;',
          ],
    	],
    ])->label('Ende Auswirkung'); 
    ?>
  </td></tr>  
  
 <tr> <td>
  

    <?= $form->field($model, 'Prio')->textInput() ?>

    <?= $form->field($model, 'Schwere')->textInput() ?>

    <?= $form->field($model, 'Beschreibung')->textInput() ?>

    <?= $form->field($model, 'Aktion')->textInput() ?>

    <?= $form->field($model, 'Loesung')->textInput() ?>

    <?= $form->field($model, 'Wartung')->textInput() ?>

    <?= $form->field($model, 'Intern')->textInput() ?>

    <?= $form->field($model, 'Author')->textInput() ?>

    <?= $form->field($model, 'Korrektor')->textInput() ?>

    <?= $form->field($model, 'Freigegeben')->textInput() ?>

    <?= $form->field($model, 'Externe_betroffen')->textInput() ?>

    <?= $form->field($model, 'SLA_betroffen')->textInput() ?>

    <?= $form->field($model, 'Wiedervorlage')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>
  </td></tr></table>

    <?php ActiveForm::end(); ?>

</div>
