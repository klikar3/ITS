<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\rzSLAs */

$this->title = Yii::t('app', 'Create Rz Slas');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Rz Slas'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="rz-slas-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
