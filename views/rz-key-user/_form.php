<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\RzKeyUser */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="rz-key-user-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'System')->textInput() ?>

    <?= $form->field($model, 'Kunde')->textInput() ?>

    <?= $form->field($model, 'Standort')->textInput() ?>

    <?= $form->field($model, 'email')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
