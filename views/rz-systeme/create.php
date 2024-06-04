<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\RzSysteme */

$this->title = Yii::t('app', 'Create Rz Systeme');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Rz Systemes'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="rz-systeme-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
