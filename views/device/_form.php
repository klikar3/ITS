<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Devices */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="devices-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Device')->textInput() ?>

    <?= $form->field($model, 'DeviceId')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
