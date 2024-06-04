<?php

use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\widgets\ActiveForm;

use app\models\rzKomponentTyp;

/* @var $this yii\web\View */
/* @var $model app\models\rzKomponenten */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="rz-komponenten-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'typ')->dropDownList(
            ArrayHelper::map(rzKomponentTyp::find()->all(),'id','name'),
            ['prompt'=>'Select...']
        ); ?>

    <?= $form->field($model, 'devicename')->textInput() ?>

    <?= $form->field($model, 'service')->textInput() ?>

    <?= $form->field($model, 'desc')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
