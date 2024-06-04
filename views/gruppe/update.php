<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Gruppe */

$this->title = Yii::t('app', 'Update Gruppe: {nameAttribute}', [
    'nameAttribute' => $model->gId,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Gruppes'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->gId, 'url' => ['view', 'id' => $model->gId]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="gruppe-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
