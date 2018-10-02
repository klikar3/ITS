<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\RzSysteme */

$this->title = Yii::t('app', 'Update Rz Systeme: {nameAttribute}', [
    'nameAttribute' => $model->SId,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Rz Systemes'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->SId, 'url' => ['view', 'id' => $model->SId]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="rz-systeme-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
