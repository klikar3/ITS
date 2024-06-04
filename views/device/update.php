<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Devices */

$this->title = Yii::t('app', 'Update Devices: {nameAttribute}', [
    'nameAttribute' => $model->dId,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Devices'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->dId, 'url' => ['view', 'id' => $model->dId]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="devices-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
