<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\RzKeyUser */

$this->title = Yii::t('app', 'Create Rz Key User');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Rz Key Users'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="rz-key-user-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
