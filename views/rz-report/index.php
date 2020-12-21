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

    <p> <span class='btn btn-success'>
        <?= Html::a(Yii::t('app', 'Create Rz Report'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'condensed' => true,
        'columns' => [
            [ 'class' => '\kartik\grid\ExpandRowColumn', 
                            'value' => function ($data, $model, $key, $index ) use ($rzSysteme,$rzKunden,$rzStandorte)/*use ($openv) */{ 
            //                				($data->msID == $openv) ? GridView::ROW_EXPANDED : GridView::ROW_COLLAPSED;
//                            				if ($data->msID == $openv) 
//            													return GridView::ROW_EXPANDED;
//            												else 	
                                    	return GridView::ROW_COLLAPSED;
                                }
            										,
            								'detail' => function ($data, $model, $key, $index) use ($rzSysteme,$rzKunden,$rzStandorte) {//function ($data, $id) {
            									//$cont = Mitgliederschulen::findOne($id);
            	                return Yii::$app->controller->renderPartial('_form', ['model'=>$data, 
                                              'rzSysteme' => $rzSysteme, 'rzKunden' => $rzKunden, 
                                              'rzStandorte' => $rzStandorte]);
                        		},
                        		'enableRowClick' => true,
						],
            'Rid',
            'System',
            [ 'attribute' => 'von', 'value' => function ($data) {
                         return date('d.m.Y H:i', DateTime::createFromFormat('Y-m-d H:i:s.u', $data['von'])->getTimestamp()); 
                          }
            ],
            [ 'attribute' => 'bis', 
              'value' => function ($data) {
                         return date('d.m.Y H:i', DateTime::createFromFormat('Y-m-d H:i:s.u', $data['von'])->getTimestamp()); 
                          },
              'options' => [ 'width' => '200px;']
            ],
//            'von_ausw',
            //'bis_ausw',
            [ 'attribute' => 'Kunde',
              'value' => function ($data) {
                         return implode(', ', explode(",", $data['Kunde'])); 
                          },
//              'options' => [ 'width' => '200px !important;']
            ],
            [ 'attribute' => 'Betroffen',
              'value' => function ($data) {
                         return implode(', ', explode(",", $data['Betroffen'])); 
                          },
//              'options' => [ 'width' => '200px !important;']
            ],
            [ 'attribute' => 'Standort',
              'value' => function ($data) {
                         return implode(', ', explode(",", $data['Standort'])); 
                          },
//              'options' => [ 'width' => '200px !important;']
            ],
            //'Prio',
            //'Schwere',
            [ 'attribute' => 'Beschreibung',
              'options' => [ 'width' => '200px;'],
              'value' => function ($data) {
                         return implode('. ', explode(".", $data['Beschreibung'])); 
                          },
            ],
            [ 'attribute' => 'Aktion',
              'options' => [ 'width' => '200px !important;'],
            ],
            [ 'attribute' => 'Loesung',
              'options' => [ 'width' => '200px !important;'],
            ],
            [ 'attribute' => 'Wartung',
//              'options' => [ 'width' => '200px !important;'],
            ],
            [ 'attribute' => 'Intern',
//              'options' => [ 'width' => '200px !important;'],
            ],
            //'Author',
            //'Korrektor',
            //'Freigegeben',
            //'Externe_betroffen',
            //'SLA_betroffen',
            //'Wiedervorlage',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
    <?php Pjax::end(); ?>
</div>
