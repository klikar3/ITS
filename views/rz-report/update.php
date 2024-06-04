<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\RzReport */

$this->title = Yii::t('app', 'Update Rz Report: {nameAttribute}', [
    'nameAttribute' => $model->Rid,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Rz Reports'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->Rid, 'url' => ['view', 'id' => $model->Rid]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="rz-report-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
