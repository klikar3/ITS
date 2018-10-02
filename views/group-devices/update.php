<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\GroupDevices */

$this->title = Yii::t('app', 'Update Group Devices: {nameAttribute}', [
    'nameAttribute' => $model->gdId,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Group Devices'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->gdId, 'url' => ['view', 'id' => $model->gdId]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="group-devices-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
