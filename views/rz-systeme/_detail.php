<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\ActiveForm;
use kartik\grid\GridView;
use kartik\detail\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\RzSysteme */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="rz-systeme-form" style="background-color:lightblue;">

    <?php $form = ActiveForm::begin(['id' => 'form-'.strval($model->SId),'action' => $model->isNewRecord ? Url::to(['rz-systeme/create']) : Url::to(['rz-systeme/update/?id='.strval($model->SId)])]); ?>

    <?= DetailView::widget([
            'model'=>$model,
            'condensed'=>true,
            'hover'=>true,
            'mode'=>DetailView::MODE_VIEW,
            'panel'=>[
                'heading'=>'System # ' . $model->SId,
                'type'=>DetailView::TYPE_INFO,
            ],
            'attributes'=>[
                'System',
                'Description',
                'KontaktIT',
                'KontaktFachlich',
                'Dienstleister',
                'KontaktDienstleister',
                ['attribute'=>'DatenschutzvereinbAm', 'type'=>DetailView::INPUT_DATE],
                'externerZugriff',
                'Infrastruktur',
                'Backups',
                'Ausfallsicherheit',
                ['attribute'=>'anzahlUser', 'type'=>DetailView::INPUT_SPIN],
                'zyklischerSystemarbeitenDurch',
            ],
        ]);
    ?>

    <div class="panel-info" style="background-color:lightblue;">
    <div class="col-md-6">
        <?= GridView::widget([
        'dataProvider' => $rzSlas,
//        'filterModel' => $searchModel,
        'columns' => [
//            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'name',
            'description',
        ],
    ]); ?>

    </div>
    <div class="col-md-6">
        <?= GridView::widget([
        'dataProvider' => $rzSlaZeiten,
//        'filterModel' => $searchModel,
        'columns' => [
//            ['class' => 'yii\grid\SerialColumn'],

            [ 'attribute' => 'rzSlaZeitens.wochentag',
              'value' => function ($data) use ($days) {return $days[$data['wochentag']];},
              'label' => 'Wochentag'
            ],
            
            [ 'attribute' => 'rzSlaZeitens.von',
              'format' => 'raw',
              'value' => function ($data) {return Yii::$app->formatter->asTime($data->von,'HH:mm');},
              'label' => 'Von'
            ],
            [ 'attribute' => 'rzSlaZeitens.bis',
              'format' => 'raw',
              'value' => function ($data) {return Yii::$app->formatter->asTime($data->bis,'HH:mm');},
              'label' => 'Bis'
            ],
        ],
    ]); ?>
    </div>

    </div>
    <?php ActiveForm::end(); ?>

</div>
