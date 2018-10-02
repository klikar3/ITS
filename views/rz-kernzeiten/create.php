<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\RzKernzeiten */

$this->title = Yii::t('app', 'Create Rz Kernzeiten');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Rz Kernzeitens'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="rz-kernzeiten-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
