<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\RzStandorte */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="rz-standorte-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Standort')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
