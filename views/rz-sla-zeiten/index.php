<?php

use yii\helpers\Html;
//use yii\grid\GridView;
use yii\widgets\Pjax;
use kartik\grid\GridView;

use app\models\RzSlas;


/* @var $this yii\web\View */
/* @var $searchModel app\models\rzSlaZeitenSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Rz Sla-Zeiten');
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
<div class="rz-sla-zeiten-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a(Yii::t('app', 'Erstelle Rz Sla-Zeit'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            'id',
            [ 'attribute' => 'slaId',
              'value' => function ($data) {return RzSlas::findOne($data->slaId)->name;},
              'width' => '180px',
            ],
            'mandant',
            [ 'attribute' => 'wochentag',
              'value' => function ($data) use ($days) {return $days[$data->wochentag];}
            ],
            
            [ 'attribute' => 'von',
              'format' => 'raw',
              'value' => function ($data) {return Yii::$app->formatter->asTime($data->von,'HH:mm');},
            ],
            [ 'attribute' => 'bis',
              'format' => 'raw',
              'value' => function ($data) {return Yii::$app->formatter->asTime($data->bis,'HH:mm');},
            ],
//            'tagesName',
            ['class' => 'kartik\grid\ActionColumn',
              'width' => '50px'
            ],
        ],
    ]); ?>
    <?php Pjax::end(); ?>
</div>
