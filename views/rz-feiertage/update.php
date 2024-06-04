<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\RzFeiertage */

$this->title = Yii::t('app', 'Update Rz Feiertage: {nameAttribute}', [
    'nameAttribute' => $model->FId,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Rz Feiertages'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->FId, 'url' => ['view', 'id' => $model->FId]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="rz-feiertage-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
