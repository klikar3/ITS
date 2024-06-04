<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\NavSecondTier */

$this->title = Yii::t('app', 'Create Nav Second Tier');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Nav Second Tiers'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="nav-second-tier-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
