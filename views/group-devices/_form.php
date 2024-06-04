<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\GroupDevices */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="group-devices-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Gruppe')->textInput() ?>

    <?= $form->field($model, 'DeviceId')->textInput() ?>

    <?= $form->field($model, 'Anteil')->textInput() ?>

    <?= $form->field($model, 'DeviceName')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
