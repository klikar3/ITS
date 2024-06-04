<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\rzKomponenten */

$this->title = Yii::t('app', 'Create Rz Komponenten');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Rz Komponentens'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="rz-komponenten-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
