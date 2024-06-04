<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\rzKomponentTyp */

$this->title = Yii::t('app', 'Create Rz Komponent Typ');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Rz Komponent Typs'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="rz-komponent-typ-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
