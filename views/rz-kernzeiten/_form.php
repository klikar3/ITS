<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\RzKernzeiten */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="rz-kernzeiten-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Mandant')->textInput() ?>

    <?= $form->field($model, 'Wochentag')->textInput() ?>

    <?= $form->field($model, 'Kernzeit_von')->textInput() ?>

    <?= $form->field($model, 'Kernzeit_bis')->textInput() ?>

    <?= $form->field($model, 'Tagesname')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
