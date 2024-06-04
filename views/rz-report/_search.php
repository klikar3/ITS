<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\RzReportSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="rz-report-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'Rid') ?>

    <?= $form->field($model, 'System') ?>

    <?= $form->field($model, 'von') ?>

    <?= $form->field($model, 'bis') ?>

    <?= $form->field($model, 'von_ausw') ?>

    <?php // echo $form->field($model, 'bis_ausw') ?>

    <?php // echo $form->field($model, 'Kunde') ?>

    <?php // echo $form->field($model, 'Betroffen') ?>

    <?php // echo $form->field($model, 'Standort') ?>

    <?php // echo $form->field($model, 'Prio') ?>

    <?php // echo $form->field($model, 'Schwere') ?>

    <?php // echo $form->field($model, 'Beschreibung') ?>

    <?php // echo $form->field($model, 'Aktion') ?>

    <?php // echo $form->field($model, 'Loesung') ?>

    <?php // echo $form->field($model, 'Wartung') ?>

    <?php // echo $form->field($model, 'Intern') ?>

    <?php // echo $form->field($model, 'Author') ?>

    <?php // echo $form->field($model, 'Korrektor') ?>

    <?php // echo $form->field($model, 'Freigegeben') ?>

    <?php // echo $form->field($model, 'Externe_betroffen') ?>

    <?php // echo $form->field($model, 'SLA_betroffen') ?>

    <?php // echo $form->field($model, 'Wiedervorlage') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
