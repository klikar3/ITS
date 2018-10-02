<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\RzKunden */

$this->title = Yii::t('app', 'Update Rz Kunden: {nameAttribute}', [
    'nameAttribute' => $model->KId,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Rz Kundens'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->KId, 'url' => ['view', 'id' => $model->KId]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="rz-kunden-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
