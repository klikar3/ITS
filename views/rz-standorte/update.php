<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\RzStandorte */

$this->title = Yii::t('app', 'Update Rz Standorte: {nameAttribute}', [
    'nameAttribute' => $model->SId,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Rz Standortes'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->SId, 'url' => ['view', 'id' => $model->SId]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="rz-standorte-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
