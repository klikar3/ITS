<?php

use yii\helpers\Html;
//use yii\grid\GridView;
use yii\widgets\Pjax;

use kartik\grid\GridView;


/* @var $this yii\web\View */
/* @var $searchModel app\models\RzReportSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Einträge im RZ-Report verwalten');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="rz-report-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>
<?php echo Html::a('Erweiterte Suche','#',['class'=>'search-button']); ?>
<div class="search-form" style="display:none">
<?php $this->renderAjax('_search',['model'=>$searchModel,]); ?>
</div><!-- search-form -->

    <p>
        <?php Html::a(Yii::t('app', 'Create Rz Report'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'condensed' => true,
        'striped' => true,
//        'tableOptions' => ['class' => 'table table-striped'],
        'responsive'=>true,
        'hover'=>true,
        'pjax' => true,
        'headerRowOptions' => ['style' => 'font-size:10pt;white-space:normal;',],
        'rowOptions' => function($model, $index, $widget, $grid){
                if ($model->Freigegeben == 1) $color = "";
                if ($model->Freigegeben == 0) $color = "color: #FF0000;";
                if ($model->Wiedervorlage == 1) $color = "color: blue;";
                return
                  ['style' => 'font-size:10pt;font-weight:bold;word-wrap:break-word;'.$color];
             },      
//        'resizableColumns'=>true,
//        'resizeStorageKey'=>Yii::$app->user->id . '-' . date("m"),
        'toolbar' =>  [
            ['content' => 
                Html::a('<i class="glyphicon glyphicon-plus"></i> Eintrag erstellen', ['create'], ['class' => 'btn btn-success',])// 'onclick' => 'alert("This will launch the book creation form.\n\nDisabled for this demo!");'])
//                 . ' '.
//                Html::a('<i class="glyphicon glyphicon-repeat"></i>', ['grid-demo'], ['data-pjax' => 0, 'class' => 'btn btn-default', 'title' => Yii::t('kvgrid', 'Reset Grid')])
            ],
            ['content' => 
                Html::a('<i class="glyphicon glyphicon-question-sign"></i>', ['#'], ['data-pjax' => 0, 'class' => 'btn btn-primary', 'title' => Yii::t('app', 'red => Nicht freigegeben
blue => auf Wiedervorlage')])
//                Html::a('<i class="glyphicon glyphicon-repeat"></i>', ['grid-demo'], ['data-pjax' => 0, 'class' => 'btn btn-default', 'title' => Yii::t('kvgrid', 'Reset Grid')])
            ],
//            '{export}',
//            '{toggleData}',
        ],
        'panel' => [
            'type' => GridView::TYPE_PRIMARY,
            'heading' => 'RZ-Report Einträge',
        ],
        'toggleDataOptions' => ['minCount' => 10, 'more' => 20],
        'columns' => [
            ['class' => 'yii\grid\ActionColumn'],
            'Rid',
            [ 'attribute' => 'System',
              'width' => '100px',
              'value' => function ($data) {
                            return str_replace(',',', ', $data['System']); 
                          },
//              'options' => [ 'style' => 'width:150px !important;'],
              'headerOptions' => [ 'style' => 'width:150px !important;white-space:normal;'],
//              'filterOptions' => [ 'style' => 'width:150px !important;'],
            ],
            [ 'attribute' => 'von', 
              'value' => function ($data) {
                            return date('d.m.Y H:i', DateTime::createFromFormat('Y-m-d H:i:s.u', $data['von'])->getTimestamp()); 
                          },
//              'noWrap' => false,
//              'format' => 'raw',
              'label' => 'Beginn Störung',
              'width' => '150px',
              'headerOptions' => [ 'style' => 'width:3000px !important;white-space:normal;'],
//              'filterOptions' => [ 'style' => 'width:150px !important;'],
            ],
            [ 'attribute' => 'bis', 
              'label' => 'Ende Störung',
              'value' => function ($data) {
                         return date('d.m.Y H:i', DateTime::createFromFormat('Y-m-d H:i:s.u', $data['bis'])->getTimestamp()); 
                          },
              'width' => '150px',
              'headerOptions' => [ 'style' => 'width:150px !important;white-space:normal;'],
            ],
//            'von_ausw',
            //'bis_ausw',
            [ 'attribute' => 'Kunde',
              'value' => function ($data) {
                            return str_replace(',',', ', $data['Kunde']); 
//                         return implode(', ', explode(",", $data['Kunde'])); 
                          },
//              'options' => [ 'width' => '200px !important;']
            ],
            [ 'attribute' => 'Betroffen',
              'value' => function ($data) {
                            return str_replace(',',', ', $data['Betroffen']); 
//                         return implode(', ', explode(",", $data['Betroffen'])); 
                          },
              'options' => [ 'width' => '200px !important;'],
              'headerOptions' => [ 'style' => 'width:150px !important;white-space:normal;'],
            ],
            [ 'attribute' => 'Standort',
              'label' => 'Standorte',
              'value' => function ($data) {
                            return str_replace(',',', ', $data['Standort']); 
//                         return implode(', ', explode(",", $data['Standort'])); 
                          },
//              'options' => [ 'width' => '200px !important;']
            ],
            //'Prio',
            //'Schwere',
            [ 'attribute' => 'Beschreibung',
              'options' => [ 'width' => '200px;word-wrap:break-word!important;white-space:normal;'],
              'value' => function ($data) {
                         return implode('. ', explode(".", $data['Beschreibung'])); 
                          },
            ],
//            [ 'attribute' => 'Aktion',
//              'options' => [ 'width' => '100px !important;'],
//            ],
//            [ 'attribute' => 'Loesung',
//              'options' => [ 'width' => '100px !important;'],
//            ],
            [ 'attribute' => 'Wartung',
              'label' => 'Angek. Wartung',
              'headerOptions' => [ 'style' => 'width:150px !important;white-space:normal;'],
              'width' => '60px',
            ],
            [ 'attribute' => 'Intern',
              'width' => '60px',
            ],
            [ 'class' => '\kartik\grid\ExpandRowColumn', 
              'value' => function ($data, $model, $key, $index ) use ($rzSysteme,$rzKunden,$rzStandorte)/*use ($openv) */{ 
            //                				($data->msID == $openv) ? GridView::ROW_EXPANDED : GridView::ROW_COLLAPSED;
//                            				if ($data->msID == $openv) 
//            													return GridView::ROW_EXPANDED;
//            												else 	
                                    	return GridView::ROW_COLLAPSED;
                          },
							'detail' => function ($data, $model, $key, $index) use ($rzSysteme,$rzKunden,$rzStandorte) {//function ($data, $id) {
                    return Yii::$app->controller->renderPartial('_form', ['model'=>$data, 
                                'rzSysteme' => $rzSysteme, 'rzKunden' => $rzKunden, 
                                'rzStandorte' => $rzStandorte]);
          		},
              'detailRowCssClass' => function ($data, $model, $key, $index) {
                                                    return /*($model->Rid % 2) ? GridView::TYPE_INFO : */GridView::TYPE_WARNING;},
          		'enableRowClick' => true,
              'width' => '0px;',
              'expandIcon' => '',
						],
            //'Author',
            //'Korrektor',
            //'Freigegeben',
            //'Externe_betroffen',
            //'SLA_betroffen',
            //'Wiedervorlage',

        ],
    ]); ?>
    <?php Pjax::end(); ?>
</div>
