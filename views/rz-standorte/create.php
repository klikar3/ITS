<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\RzStandorte */

$this->title = Yii::t('app', 'Create Rz Standorte');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Rz Standortes'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="rz-standorte-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
