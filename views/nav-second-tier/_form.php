<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\NavSecondTier */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="nav-second-tier-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'servername')->textInput() ?>

    <?= $form->field($model, 'service')->textInput() ?>

    <?= $form->field($model, 'system')->textInput() ?>

    <?= $form->field($model, 'sqlserver')->textInput() ?>

    <?= $form->field($model, 'datenbank')->textInput() ?>

    <?= $form->field($model, 'aktiv')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
