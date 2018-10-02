<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\RzKernzeitenSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="rz-kernzeiten-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'zId') ?>

    <?= $form->field($model, 'Mandant') ?>

    <?= $form->field($model, 'Wochentag') ?>

    <?= $form->field($model, 'Kernzeit_von') ?>

    <?= $form->field($model, 'Kernzeit_bis') ?>

    <?php // echo $form->field($model, 'Tagesname') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
