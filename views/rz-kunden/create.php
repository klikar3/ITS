<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\RzKunden */

$this->title = Yii::t('app', 'Create Rz Kunden');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Rz Kundens'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="rz-kunden-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
