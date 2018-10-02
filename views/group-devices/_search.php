<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\GroupDevicesSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="group-devices-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'gdId') ?>

    <?= $form->field($model, 'Gruppe') ?>

    <?= $form->field($model, 'DeviceId') ?>

    <?= $form->field($model, 'Anteil') ?>

    <?= $form->field($model, 'DeviceName') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
