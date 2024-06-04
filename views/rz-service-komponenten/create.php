<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\rzServiceKomponenten */

$this->title = Yii::t('app', 'Create Rz Service Komponenten');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Rz Service Komponentens'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="rz-service-komponenten-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
