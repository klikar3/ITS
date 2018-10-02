<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\RzKernzeiten */

$this->title = Yii::t('app', 'Update Rz Kernzeiten: {nameAttribute}', [
    'nameAttribute' => $model->zId,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Rz Kernzeitens'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->zId, 'url' => ['view', 'id' => $model->zId]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="rz-kernzeiten-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
