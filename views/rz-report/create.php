<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\RzReport */

$this->title = Yii::t('app', 'Create Rz Report');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Rz Reports'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="rz-report-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
