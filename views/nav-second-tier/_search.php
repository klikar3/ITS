<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\NavSecondTierSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="nav-second-tier-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'servername') ?>

    <?= $form->field($model, 'service') ?>

    <?= $form->field($model, 'system') ?>

    <?= $form->field($model, 'sqlserver') ?>

    <?php // echo $form->field($model, 'datenbank') ?>

    <?php // echo $form->field($model, 'aktiv') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
