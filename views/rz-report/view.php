<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\RzReport */

$this->title = $model->Rid;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Rz Reports'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="rz-report-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Update'), ['update', 'id' => $model->Rid], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app', 'Delete'), ['delete', 'id' => $model->Rid], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => Yii::t('app', 'Are you sure you want to delete this item?'),
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'Rid',
            'System',
            'von',
            'bis',
            'von_ausw',
            'bis_ausw',
            'Kunde',
            'Betroffen',
            'Standort',
            'Prio',
            'Schwere',
            'Beschreibung',
            'Aktion',
            'Loesung',
            'Wartung',
            'Intern',
            'Author',
            'Korrektor',
            'Freigegeben',
            'Externe_betroffen',
            'SLA_betroffen',
            'Wiedervorlage',
        ],
    ]) ?>

</div>
