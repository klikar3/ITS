<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\RzKeyUser */

$this->title = Yii::t('app', 'Update Rz Key User: {nameAttribute}', [
    'nameAttribute' => $model->Kid,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Rz Key Users'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->Kid, 'url' => ['view', 'id' => $model->Kid]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="rz-key-user-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
