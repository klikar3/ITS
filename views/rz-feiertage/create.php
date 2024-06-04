<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\RzFeiertage */

$this->title = Yii::t('app', 'Create Rz Feiertage');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Rz Feiertages'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="rz-feiertage-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
