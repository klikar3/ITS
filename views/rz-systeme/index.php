<?php

use yii\data\ActiveDataProvider;
use yii\db\Query;
use yii\db\ActiveQuery;
use yii\helpers\Html;
//use yii\grid\GridView;
use yii\widgets\Pjax;

use kartik\grid\GridView;

use app\models\RzSlas;
use app\models\RzSlaZeiten;


/* @var $this yii\web\View */
/* @var $searchModel app\models\RzSystemeSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Rz Systeme');
$this->params['breadcrumbs'][] = $this->title;

$days = array(
    1 => 'Montag',
    2 => 'Dienstag',
    3 => 'Mittwoch',
    4 => 'Donnerstag',
    5 => 'Freitag',
    6 => 'Samstag',
    7 => 'Sonntag',
    8 => 'Mo - Fr',
    9 => 'Mo - Sa',
    10 => 'Täglich'
);
?>
<div class="rz-systeme-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a(Yii::t('app', 'Erstelle Rz System'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
//            ['class' => 'yii\grid\SerialColumn'],

            'SId',
            'System',

            ['class' => 'yii\grid\ActionColumn'],
            [ 'class' => '\kartik\grid\ExpandRowColumn', 
              'value' => function ($data, $model, $key, $index ){ 
                                    	return GridView::ROW_COLLAPSED;
                          },  
							'detail' => function ($data, $model, $key, $index) use ($days) {
                    return Yii::$app->controller->renderPartial('_detail', ['model'=>$data,
                                'days' => $days, 
                                'rzSlas' => new ActiveDataProvider([
                                    'query' => rzSlas::find()->where(['system_id' => $data->SId]), 
                                    ]),
                                'rzSlaZeiten' => new ActiveDataProvider([
                                    'query' => rzSlaZeiten::find()->joinWith('sla')
//                                                ->on(['rzSlaZeiten.sla_id' => 'rzSlas.id'])
                                                ->where(['rzSlas.system_id' => $data->SId]), 
                                    ]),
                            ]);
          		},
              'detailRowCssClass' => function ($data, $model, $key, $index) {
                                            return ($data->Rid % 2) ? GridView::TYPE_INFO : GridView::TYPE_WARNING;},
          		'enableRowClick' => true,
              'width' => '0px;',
              'expandIcon' => false,
						],
        ],
    ]); ?>
    <?php Pjax::end(); ?>
</div>
