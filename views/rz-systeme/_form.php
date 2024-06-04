<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\RzSysteme */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="rz-systeme-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'System')->textInput() ?>
    <?= $form->field($model, 'Description')->textInput() ?>
    <?= $form->field($model, 'KontaktIT')->textInput() ?>
    <?= $form->field($model, 'KontaktFachlich')->textInput() ?>
    <?= $form->field($model, 'Dienstleister')->textInput() ?>
    <?= $form->field($model, 'KontaktDienstleister')->textInput() ?>
    <?= $form->field($model, 'DatenschutzvereinbAm')->textInput() ?>
    <?= $form->field($model, 'externerZugriff')->textInput() ?>
    <?= $form->field($model, 'Infrastruktur')->textInput() ?>
    <?= $form->field($model, 'Backups')->textInput() ?>
    <?= $form->field($model, 'Ausfallsicherheit')->textInput() ?>
    <?= $form->field($model, 'anzahlUser')->textInput() ?>
    <?= $form->field($model, 'zyklischerSystemarbeitenDurch')->textInput() ?>


    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
